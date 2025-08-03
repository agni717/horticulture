<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_access extends Admin_Controller {
	
	public function index()
	{	
		
		// Redirect a user if he's already logged in
		//$hq_dashboard = 'admin/hq_dashboard';
//		$District_dashboard = 'admin/district_dashboard';
		$hq_dashboard = 'admin/dashboard_hq';
		$District_dashboard = 'admin/dashboard_dist';
		$this->admin_m->hqloggedin() == FALSE || redirect($hq_dashboard);
		$this->admin_m->distloggedin() == FALSE || redirect($District_dashboard);
		
		if ($_POST) {
				    
		          $uid = $this->input->post('user_name');
		          $pwd = $this->input->post('user_pass');

		           
		            $this->form_validation->set_error_delimiters('<span style="color:#F00;font-size:10px;">', '</span>');
		            
		            $this->form_validation->set_rules("user_name", "User Name", "trim|required|xss_clean");
		            $this->form_validation->set_rules("user_pass", "Password", "trim|required|xss_clean");

					// Process the form

					if ($this->form_validation->run() == TRUE) {

						if ($this->loginprocess($uid, $pwd) == true) {
							//redirect($this->input->server('HTTP_REFERER'));

							if ($this->session->userdata['utype'] == 2) {
								
								redirect($District_dashboard);
								
							}else{
								redirect($hq_dashboard);
							}

							
						} else {

							$this->data["error"] = 'Sorry Wrong Username or Password';
						}

					}

		     }
        

	     
		$this->load->view('admin/login', $this->data);
		
	}
	
	public function loginprocess($uid, $pwd){
		$username = $this->security->sanitize_filename($uid);
		//$password = $this->security->sanitize_filename($this->admin_m->hash($pwd));
		$password = $this->security->sanitize_filename($pwd);
		//$usertype = $utype;
		//var_dump($password);exit;
	
		$boolean = $this->admin_m->checklogin($username,$password);
			
		return $boolean;
	
	
	}
	
	public function check_username_password(){
		
	
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		//$pwd = $this->admin_m->hash($password);
		
		$pri = $this->db->get_where('user_info',array('username'=>$username,'password'=>$pwd ))->num_rows();
		echo json_encode($pri);
	
	}
	
	public function logout() {
        $this->session->sess_destroy();
        redirect('Admin_access');
    }
	
}