<?php
class Main extends CI_controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('application_m');
		$this->load->model('main_m');
	}

	function index()
	{
	    $data['schemes']= $this->main_m->get_scheme_list();
		$this->load->view('main/home',$data);
	}

	public function login($schemid = NULL)
	{
		$member = 'userset/applicant_dashboard';
        if($this->application_m->member_loggedin() == TRUE) redirect($member);
        $this->load->helper('captcha');
		if($schemid != NULL){
			$this->session->set_userdata('member_scm_id', $schemid);
		}else{
			if(empty($this->session->userdata('member_scm_id'))){
				redirect(base_url());
			}
		}
			$vals = array(
			    'img_path'	=> 'captcha/',
			    'img_url'	=> base_url().'captcha/',
				//'font_path'	=> base_url().'assets/fonts/ARLRDBD.TTF',
			    'img_width'	=> '110',
				'font_size' => 20,
				'word_length' => 6,
				'pool' => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',
			    'img_height' => 40,
			    'expiration' => 3600,
				'colors'        => array(
					'background' => array(255, 255, 255),
					'border' => array(80, 100, 55),
					'text' => array(0, 0, 0),
					'grid' => array(255, 140, 140)
				)
			);
		    
			/* Generate the captcha */
			$this->data['captcha'] = create_captcha($vals);
			
			$datas = array(
				'captcha_time' => $this->data['captcha']['time'],
				'ip_address' => $this->input->ip_address(),
				'word' => $this->data['captcha']['word']
				);

			$query = $this->db->insert_string('captcha', $datas);
			$this->db->query($query);
		
        
	        
		$this->load->view('main/citizen/user-login',$this->data);
	}
	
	protected function loginprocess_member($uid, $pwd) {

        $username = $this->security->sanitize_filename($uid);
        $password = $this->application_m->hash($pwd);
        
        $boolean = $this->application_m->checklogin_member($username, $password);

        return $boolean;
    }

	public function get_new_capcha_set(){
		if($_POST){
			//$location_set = $this->input->post('location_select');
			$this->load->helper('captcha');
			$vals = array(
			    'img_path'	=> 'captcha/',
			    'img_url'	=> base_url().'captcha/',
				//'font_path'	=> base_url().'assets/fonts/ARLRDBD.TTF',
			    'img_width'	=> '110',
				'font_size' => 20,
				'word_length' => 6,
				'pool' => '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',
			    'img_height' => 40,
			    'expiration' => 3600,
				'colors'        => array(
					'background' => array(255, 255, 255),
					'border' => array(80, 100, 55),
					'text' => array(0, 0, 0),
					'grid' => array(255, 140, 140)
				)
			);
		    
	      	/* Generate the captcha */
	      	$caps = create_captcha($vals);
	      
	      	$datas = array(
			    'captcha_time' => $caps['time'],
			    'ip_address' => $this->input->ip_address(),
			    'word' => $caps['word']
			);

		  	$query = $this->db->insert_string('captcha', $datas);
		  	$this->db->query($query);
		  	
			$msg = 0;
			if(count($caps) > 0){
				echo json_encode(array('msg'=>1, 'cap_set' => $caps));
			}else{
				echo json_encode(array('msg'=>$msg));
			}
			exit;
		}
	}

	protected function generateRandomString($length = 4){
		$characters = '0123456789';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}

	public function get_otp_forlogin_candidates(){
		if($_POST){
					$fu_mobile = $this->input->post('username');
		            $userCaptcha = $this->input->post('captcha');
				    
				    $userCaptcha = json_encode($userCaptcha);
				    $userCaptcha = str_replace("\"", "", $userCaptcha);
				    
					$this->form_validation->set_rules("username", "Mobile No.", "trim|required|xss_clean");
		            $this->form_validation->set_rules("captcha", "Captcha", "trim|required|xss_clean");

			$msg = 0;
			if($this->form_validation->run() == TRUE)
            {
				$expiration = time()-3600; // Two hour limit
				$this->db->query("DELETE FROM captcha WHERE captcha_time < ".$expiration);
				
				// Then see if a captcha exists:
				$sql = "SELECT COUNT(*) AS count FROM captcha WHERE word = ? AND ip_address = ? AND captcha_time > ?";
				$binds = array($userCaptcha, $this->input->ip_address(), $expiration);
				$query = $this->db->query($sql, $binds);
				$row = $query->row();
				if ($row->count == 0)
				{
					echo json_encode(array('msg'=>$msg, 'e_msg'=>'Capcha Not Match, Reload and try again.'));

				}else{
					
					if($this->main_m->checkAll_for_Mobile_Validate($fu_mobile) == FALSE){
						$getmabile_userid_all = $this->db->get_where('user_info',array('u_mobile'=>$fu_mobile))->row();
						$getmabile_userid = $getmabile_userid_all->u_id;
					}else{
						$getmabile_userid = NULL;
					}
						
						$generate_otp = $this->generateRandomString(6);
						$row_arr = array(
							'u_otpset' => $generate_otp,
							'otp_count' => 1,
							'otp_sendtime' => date('Y-m-d H:i:s'),
							'u_createdate' => date('Y-m-d H:i:s')
						);
						if($getmabile_userid == NULL){
							$row_arr['u_mobile'] = $fu_mobile;
						}
						if($this->main_m->insertRegistration_details_intheDB($row_arr, $getmabile_userid) == TRUE){
							$smsarray[0] = 402;
							if($smsarray[0] == 402){
								$this->session->set_userdata('member_mobile_set', $fu_mobile);
								echo json_encode(array('msg'=>1, 's_msg' => $fu_mobile, 'mobsms' => ''));
							}else{
								echo json_encode(array('msg'=>$msg, 'e_msg'=>'SMS not Send Properly, Try Again.'));
							}
							
						}else{
							echo json_encode(array('msg'=>$msg, 'e_msg'=>'DB Updation problem, Try Again'));
						}

				}
				
			}else{
				echo json_encode(array('msg'=>$msg, 'e_msg'=>validation_errors()));
			}
			exit;
		}else{
			redirect('default404');
		}
	}
	
	public function loginotp_page(){
		if($this->session->userdata('member_mobile_set') == ""){
			redirect('main/login');
		}
		$this->data['error'] = "";
		$this->data['mobotp'] = $this->db->get_where('user_info',array('u_mobile'=>$this->session->userdata('member_mobile_set')))->row()->u_otpset;
		$this->load->view('main/citizen/otp-login', $this->data);
	}

	public function checkotp_forlogin_candidates(){
		if($_POST){
			$emailotp_sign = $this->input->post('combine');
			$fu_mobile = $this->input->post('mobile');
			$otp1 = $this->input->post('otp1');
			$otp2 = $this->input->post('otp2');
			$otp3 = $this->input->post('otp3');
			$otp4 = $this->input->post('otp4');
			$otp5 = $this->input->post('otp5');
			$otp6 = $this->input->post('otp6');
			$serverconbile = $otp1.$otp2.$otp3.$otp4.$otp5.$otp6;
			
			$this->form_validation->set_rules('mobile', 'Mobile No.', 'trim|required|exact_length[10]|is_natural');
            $this->form_validation->set_rules('combine', 'OTP', 'trim|required|is_natural');
            $this->form_validation->set_rules('otp1', 'OTP-1', 'trim|required|is_natural');
            $this->form_validation->set_rules('otp2', 'OTP-2', 'trim|required|is_natural');
            $this->form_validation->set_rules('otp3', 'OTP-3', 'trim|required|is_natural');
            $this->form_validation->set_rules('otp4', 'OTP-4', 'trim|required|is_natural');
            $this->form_validation->set_rules('otp5', 'OTP-5', 'trim|required|is_natural');
            $this->form_validation->set_rules('otp6', 'OTP-6', 'trim|required|is_natural');
            
			if($this->form_validation->run() == TRUE)
            {	
				$detailset = $this->db->get_where('user_info',array('u_mobile'=>$fu_mobile))->row();
				if(count((array)$detailset) > 0){

					if($detailset->u_otpset == $emailotp_sign &&  $emailotp_sign == (int)$serverconbile){
						$row_arr = array(
							'u_otpset' => NULL,
							'is_active' => 1,
							'ip_address' => $this->input->ip_address(),
							'u_modifydate' => date('Y-m-d H:i:s')
						);
						if($this->main_m->insertRegistration_details_intheDB($row_arr, $detailset->u_id) == TRUE){
							if($this->main_m->checkRegister_member($fu_mobile) == TRUE){
								//mkdir(base_url()."upload_file/candidates/".$detailset->f_application_no);
								/*mkdir("upload_file/".$detailset->f_applied_for."/candidates/".$detailset->f_application_no);
								$now_arr = array(
									'fu_log_user' => $this->session->userdata('member_id'),
									'fu_log_time' => date('Y-m-d H:i:s'),
									'fu_log_ip' => $_SERVER['HTTP_X_FORWARDED_FOR'] //$this->input->ip_address()
								);
								$this->main_m->update_Candidate_user_log($now_arr);
								$this->main_m->init_candidate_result_tab($detailset->f_application_no);*/
								echo json_encode(array('msg'=>1, 's_msg' => $detailset->u_id));
							}
						}else{
							echo json_encode(array('msg'=>0, 'e_msg'=>'Data not Update properly, Try Again'));
						}
					}else{
						echo json_encode(array('msg'=>0, 'e_msg'=>'Mobile OTP Not Matched, Check Again.'));
					}

				}else{
					echo json_encode(array('msg'=>0, 'e_msg'=>'Mobile No. Not Registered Properly, Check Again.'));
				}
				
			}else{
				echo json_encode(array('msg'=>0, 'e_msg'=>validation_errors()));
			}
			exit;
		}else{
			redirect('default404');
		}
	}

	public function ajax_get_subdivision() {
		if($_POST){

			$district_code = $this->input->post( 'district_code' );
	
			$subdivision_data = $this->main_m->get_subdivision( $district_code );
		
			$option = '';
			if ( !empty( $subdivision_data ) ) {
			$option .= '<option value="">--Select---</option>';
		
			foreach ( $subdivision_data as $row ) {
				$option .= '<option value="' . $row->subdiv_id . '">' . $row->subdiv_name . '</option>';
			}
		
			} else {
				$option .= '<option value="">--Select---</option>';
			}
		
			echo $option;
	
		}else{
			redirect('default404');
		}
	}

	public function ajax_get_block() {
		if($_POST){
	
			$Sub_Division = $this->input->post( 'Sub_Division' );
		
			$block_data = $this->main_m->get_block( $Sub_Division );
		
			$option = '';
			if ( !empty( $block_data ) ) {
			$option .= '<option value="">--Select---</option>';
		
			foreach ( $block_data as $row ) {
				$option .= '<option value="' . $row->block_id . '">' . $row->block_name . '</option>';
			}
		
			} else {
			$option .= '<option value="">--Select---</option>';
			}
		
			echo $option;

		}else{
			redirect('default404');
		}
	
	}

	public function ajax_get_panchayat(){
		if($_POST){
	
			$gram_panchayat = $this->input->post( 'gram_panchayat' );

			$gram_panchayat_data = $this->main_m->get_gram_panchayat( $gram_panchayat );

			//print_r($subdivision_data); die();
			$option = '';
			if ( !empty( $gram_panchayat_data ) ) {
			$option .= '<option value="">--Select--</option>';
			foreach ( $gram_panchayat_data as $row ) {
				$option .= '<option value="' . $row->panchayat_id . '">' . $row->panchayat_name . '</option>';
			}

			} else {
			$option .= '<option value="">--Select--</option>';
			}

			echo $option;

		}else{
			redirect('default404');
		}
	
	}

	
}
?>