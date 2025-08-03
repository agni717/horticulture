<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Hq_Dashboard extends HQ_Controller {
	
	 public function __construct() {
        parent::__construct();

        //$this->data["u_details"] = $this->admin_m->GetDetailsofUsers($this->session->userdata['uid']);
        
    }
	
	public function index() {
	//$scheme_id = $this->uri->segment(3);
	$param_data = array();
		
	if($_POST)
	{
		$scheme_id = $this->input->post("scheme_id");
		$scheme_status_name = $this->input->post("scheme_status_name");
		$scheme_status_value = $this->input->post("scheme_status_value");
		
		$this->form_validation->set_rules('apl_status', 'Select Status', 'required|trim');
		
		if($this->form_validation->run() == TRUE)
		{
			//$data['list'] = '';
			//echo 123; die;
			$status = $this->input->post("apl_status");
			
			if($status == 2){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'is_applicant_submitted'=>2);
				}else{
					$param_data = array('is_applicant_submitted'=>2);
				}

			}else if($status == 1){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'is_applicant_submitted'=>1);
				}else{
					$param_data = array('is_applicant_submitted'=>1);
				}
				
			}else if($status == 3){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'is_district_app_reject_revert'=>1);
				}else{
					$param_data = array('is_district_app_reject_revert'=>1);
				}
				
			}else if($status == 4){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'is_district_app_reject_revert'=>2);
				}else{
					$param_data = array('is_district_app_reject_revert'=>2);
				}
				
			}else if($status == 5){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'is_district_app_reject_revert'=>3);
				}else{
					$param_data = array('is_district_app_reject_revert'=>3);
				}
				
			}else if($status == 6){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'is_hq_app_reject_revert'=>1);
				}else{
					$param_data = array('is_hq_app_reject_revert'=>1);
				}
				
			}else if($status == 7){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'is_hq_app_reject_revert'=>2);
				}else{
					$param_data = array('is_hq_app_reject_revert'=>2);
				}
				
			}else if($status == 8){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'is_hq_app_reject_revert'=>3);
				}else{
					$param_data = array('is_hq_app_reject_revert'=>3);
				}
				
			}else if($status == 9){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'is_first_sanction'=>1);
				}else{
					$param_data = array('is_first_sanction'=>1);
				}
				
			}else if($status == 10){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'apply_for_1st_installment_release'=>1);
				}else{
					$param_data = array('apply_for_1st_installment_release'=>1);
				}
				
			}else if($status == 11){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'is_dist_approve_1st_installment_release'=>1);
				}else{
					$param_data = array('is_dist_approve_1st_installment_release'=>1);
				}
				
			}else if($status == 12){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'first_installment_released_by_HQ'=>1);
				}else{
					$param_data = array('first_installment_released_by_HQ'=>1);
				}
				
			}else if($status == 13){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'apply_for_second_installment'=>1);
				}else{
					$param_data = array('apply_for_second_installment'=>1);
				}
				
			}else if($status == 14){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'is_dist_approve_2nd_installment_release'=>1);
				}else{
					$param_data = array('is_dist_approve_2nd_installment_release'=>1);
				}
				
			}else if($status == 15){
				if($scheme_id !=''){
					$param_data = array('scheme_id'=>$scheme_id,'second_installment_released_by_HQ'=>1);
				}else{
					$param_data = array('second_installment_released_by_HQ'=>1);
				}
				
			}			
			
			//$this->data['list'] = $list = $this->admin_m->get_App_list($row, $this->data['dist_code']);
			$this->data['list'] = $list = $this->admin_m->get_application_list($param_data);
			
			//echo '<pre>'; print_r($list); die();

			
		}else{
					
			$this->data['src_disable'] = TRUE;
			if($scheme_id !=''){
				$param_data = array('scheme_id'=>$scheme_id,$scheme_status_name=>$scheme_status_value);
			}else{
				$param_data = array($scheme_status_name=>$scheme_status_value);
			}
			$this->data['list'] = $list = $this->admin_m->get_application_list($param_data);
		}
	}else{
		$param_data = array();
		//$this->data['list'] = $list = $this->admin_m->get_App_list($row, $this->data['dist_code']);
		$this->data['list'] = $list = $this->admin_m->get_application_list($param_data);
		//echo '<pre>'; print_r($this->data); die();
	}
	
	if($list != false){
	foreach($list as $dt){
			if($dt->is_applicant_submitted == 2 || $dt->is_applicant_submitted == 1 || $dt->is_district_app_reject_revert == 2 || $dt->is_district_app_reject_revert == 2 || $dt->is_hq_app_reject_revert == 2 || $dt->is_hq_app_reject_revert == 3 || $dt->is_first_sanction == 1 || $dt->apply_for_1st_installment_release == 1 || $dt->apply_for_second_installment == 1 || $dt->first_installment_released_by_HQ == 1 || $dt->apply_for_second_installment || $dt->second_installment_released_by_HQ){
				$this->data['controller'] = 'citizen_form_details/';
			}
			if($dt->is_district_app_reject_revert == 1){
				$this->data['controller'] = 'app_approve_by_distrrict/';
			}
			if($dt->is_hq_app_reject_revert == 1){
				$this->data['controller'] = 'citizen_form_details/';
				$this->data['sanction'] = TRUE;
			}
			if($dt->is_dist_approve_1st_installment_release == 1){
				$this->data['controller'] = 'hq_payment_release_form_details/';
			}
			if($dt->is_dist_approve_2nd_installment_release == 1){
				$this->data['controller'] = 'hq_payment_2nd_release_form_details/';
			}
			
		}
	}
		
	/*echo '<pre>';
	print_r($this->data['list']);
	die();*/
		
        $this->load->view('admin/dashboard', $this->data);
    }
    
		
	//Active Scheme List Function Start
	public function active_scheme()
	{
		$data['scheme_data'] = $this->scheme_m->get_schemes();
		$this->load->view('headquater/active_scheme_list',$data);
	}

 		
	public function hq_total_application_list()
	{
		$scheme_id = $this->uri->segment(4);
		$is_applicant_submitted = '2'; //1=saved,2=submitted
		$param_data = array('scheme_id'=>$scheme_id,'is_applicant_submitted'=>$is_applicant_submitted);
		$data['list']=$this->scheme_m->get_application_list($param_data);
		/*echo '<pre>';
		print_r($data['list']);
		die();*/
		$this->load->view('headquater/hq_total_application_list',$data);
	}
	
	public function dist_approved_application_list_in_hq()
	{
		$scheme_id = $this->uri->segment(4);

		$is_district_app_reject_revert = '1'; //approved
		$param_data = array('scheme_id'=>$scheme_id,'is_district_app_reject_revert'=>$is_district_app_reject_revert);

		$data['list']=$this->scheme_m->get_application_list($param_data);
		$this->load->view('headquater/dist_approved_application_list_hq',$data);
	}
	
	public function dist_rejected_application_list_in_hq()
	{
		$scheme_id = $this->uri->segment(4);
		$is_district_app_reject_revert = '2'; //rejected		
		$param_data = array('scheme_id'=>$scheme_id,'is_district_app_reject_revert'=>$is_district_app_reject_revert);
		
		$data['list']=$this->scheme_m->get_application_list($param_data);
		$this->load->view('headquater/dist_rejected_application_list_hq',$data);
	}
	
	public function dist_updated_application_list_in_hq()
	{
		$scheme_id = $this->uri->segment(4);
		$is_project_cost_updated_dist = '1'; //rejected
		$is_first_sanction  = '1'; //rejected
		
		$param_data = array('scheme_id'=>$scheme_id,'is_first_sanction'=>$is_first_sanction,'is_project_cost_updated_dist'=>$is_project_cost_updated_dist);
		
		$data['list']=$this->scheme_m->get_application_list($param_data);
		$this->load->view('headquater/dist_updated_application_list_hq',$data);
	}
	//Active Scheme List Function End
	
	
	
	public function citizen_form_details()
	{
		
		$application_id =$this->data['application_id']= $this->uri->segment('4'); //application_id
		$this->data['app_data'] = $this->admin_m->get_application_master_data($application_id);
		$this->data['industry_data']=$this->admin_m->get_industry_master_data('',$application_id);
		$this->data['pm_data']=$this->admin_m->get_plant_machinary_data($application_id);
		$this->data['document_upload_master_data'] = $this->admin_m->get_document_upload_master_data();
		$this->data['remarks'] = $this->admin_m->get_remarks_data($application_id);
		//$this->data['document']=$this->admin_m->document_list($application_id);
		
		/*echo('<pre>');
		print_r($this->data['remarks']);
		die();*/

		$this->load->view('admin/common_citizen_form_details_view',$this->data);
		//$this->load->view('pages/application_form_details',$data);
		
	}
	
	
	
	public function app_approve_by_distrrict(){
		$application_id =$this->data['application_id']= $this->uri->segment('4'); //application_id
		$this->data['app_data'] = $this->admin_m->get_application_master_data($application_id);
		$this->data['industry_data']=$this->admin_m->get_industry_master_data('',$application_id);
		$this->data['pm_data']=$this->admin_m->get_plant_machinary_data($application_id);
		$this->data['document_upload_master_data'] = $this->admin_m->get_document_upload_master_data();
		$this->data['remarks'] = $this->admin_m->get_remarks_data($application_id);
		//$this->data['document']=$this->admin_m->document_list($application_id);
		
		/*echo('<pre>');
		print_r($this->data);
		die();*/

		$this->load->view('headquater/app_approve_by_distrrict',$this->data);
	}
	
	public function dist_updated_sanction_letter_details_in_hq()
	{

		$application_id =$this->data['application_id']= $this->uri->segment('4'); //application_id

		$this->data['app_data'] = $this->admin_m->get_application_master_data($application_id);
		$this->data['industry_data']=$this->admin_m->get_industry_master_data('',$application_id);
		$this->data['pm_data']=$this->admin_m->get_plant_machinary_data($application_id);
		$this->data['document_upload_master_data'] = $this->admin_m->get_document_upload_master_data();
		$this->data['document']=$this->admin_m->document_list($application_id);
		$this->data['remarks'] = $this->admin_m->get_remarks_data($application_id);
		
		// print_r($data['document']);

		$this->load->view('headquater/dist_updated_sanction_form_details_in_hq',$this->data);
	}
	
	public function hq_payment_release_form_details(){
		
		$application_id =$this->data['application_id']= $this->uri->segment('4'); //application_id

		$this->data['app_data'] = $this->admin_m->get_application_master_data($application_id);
		$this->data['industry_data']=$this->admin_m->get_industry_master_data('',$application_id);
		$this->data['pm_data']=$this->admin_m->get_plant_machinary_data($application_id);
		$this->data['document_upload_master_data'] = $this->admin_m->get_document_upload_master_data();
		$this->data['document']=$this->admin_m->document_list($application_id);
		$this->data['remarks'] = $this->admin_m->get_remarks_data($application_id);
		/*echo('<pre>');
		print_r($this->data);
		die();*/

		$this->load->view('headquater/hq_payment_release_form_details',$this->data);
	}
	
	public function hq_payment_2nd_release_form_details(){
		
		$application_id =$this->data['application_id']= $this->uri->segment('4'); //application_id

		$this->data['app_data'] = $this->admin_m->get_application_master_data($application_id);
		$this->data['industry_data']=$this->admin_m->get_industry_master_data('',$application_id);
		$this->data['pm_data']=$this->admin_m->get_plant_machinary_data($application_id);
		$this->data['document_upload_master_data'] = $this->admin_m->get_document_upload_master_data();
		$this->data['document']=$this->admin_m->document_list($application_id);
		$this->data['remarks'] = $this->admin_m->get_remarks_data($application_id);
		/*echo('<pre>');
		print_r($this->data);
		die();*/

		$this->load->view('headquater/hq_payment_second_release_form_details',$this->data);
	}
	
	public function ajax_app_approve_by_district(){
		
		/*print_r($_POST);
		print_r($_FILES); die();*/
		
		

		$h_action = $this->input->post('h_action');
		$application_id = $this->input->post('h_application_id');
		$user_id = $this->admin_m->get_user_id_by_application_id($application_id);
		//echo $user_id;
		//die();
		$remarks = $this->input->post('remarks');
		$app_remarks = $this->input->post('app_remarks');
		$hq_approval = $this->input->post('hq_approval');

		$datetime = date('Y-m-d H:i:s');

		$path = 'uploads/process_attachment/';

		if($_FILES['fileAction']['tmp_name']!=''){
			
			$fileAction_name = $_FILES['fileAction']['name'];
			$fileAction_tmp_name = $_FILES['fileAction']['tmp_name'];

			$time = time();
			$upload_file = $path.$time.'_'.$fileAction_name;

			move_uploaded_file($fileAction_tmp_name, $upload_file);
		}
		
		if($_FILES['fileActionApp']['tmp_name']!=''){
			
			$fileAction_name = $_FILES['fileActionApp']['name'];
			$fileAction_tmp_name = $_FILES['fileActionApp']['tmp_name'];

			$time = time();
			$upload_file = $path.$time.'_'.$fileAction_name;

			move_uploaded_file($fileAction_tmp_name, $upload_file);
		}

		if($h_action ==3){
			$data = array(
				'is_applicant_submitted'=>2,
				'is_district_app_reject_revert'=>0,
				'is_hq_app_reject_revert'=>$h_action,
				'hq_remarks'=>$remarks
			);
		}else if($h_action ==2){
			$data = array(
				'is_district_app_reject_revert'=>0,
				'is_hq_app_reject_revert'=>$h_action,
				'hq_remarks'=>$remarks
			);
		}else{
			$data = array(
				'is_district_app_reject_revert'=>0,
				'is_hq_app_reject_revert'=>$h_action,
				'hq_approval_amount'=>$hq_approval,
				'hq_remarks'=>$app_remarks
			);
		}
		

		$res1 = $this->headq_m->update_application_master($application_id,$data);

		$data_remarks = array(
			'application_id'=>$application_id,
			'user_id'=>$user_id,
			'add_datetime'=>$datetime
		);
		if($h_action ==3){
			$data_remarks['remarks']=$remarks;
			$data_remarks['remark_stat']=14;
		}elseif($h_action ==2){
			$data_remarks['remarks']=$remarks;
			$data_remarks['remark_stat']=13;
		}elseif($h_action ==1){
			$data_remarks['remarks']=$app_remarks;
			$data_remarks['remark_stat']=12;
		}

		$remark_id = $this->headq_m->add_remarks($data_remarks);

		
		if($_FILES['fileAction']['tmp_name']!='' || $_FILES['fileActionApp']['tmp_name']!=''){
			$all_remarks_attachment_data = array(
				'remark_id'=>$remark_id,
				'application_id'=>$application_id,
				'fileAttachment'=>$upload_file,
				'user_id'=>$user_id,
				'date_time'=>$datetime
			);
			$res2 = $this->headq_m->add_remarks_attachment($all_remarks_attachment_data);
		}

		if($res1==true)
		{
			if($h_action==1)
			{
				$msg = "1## Application approved by HQ";
			}elseif($h_action==2){
				$msg = "2## Application rejected by HQ";
			}elseif($h_action==3){
				$msg = "3## Application reverted by HQ";
			}
			
		}else{
			$msg = "4## Opps! some problem arrises, try again later";
		}

		echo $msg;

	
	}
	
	public function ajax_generate_sanction_leter()
	{
		/*print_r($_POST);
		print_r($_FILES); die;*/

		$user_id = $this->data['admin_uid'];
		$application_id = $this->input->post('application_id');
		$remarks = $this->input->post('remarks');
		$datetime = date('Y-m-d H:i:s');

		$fileApp_tmp_name = $_FILES['fileApp']['tmp_name'];
		$fileApp_name = $_FILES['fileApp']['name'];

		$path = 'uploads/process_sanction/';

		if($_FILES['fileApp']['tmp_name']!=''){
			
			$fileAction_name = $_FILES['fileApp']['name'];
			$fileAction_tmp_name = $_FILES['fileApp']['tmp_name'];

			$time = time();
			$upload_file = $path.$time.'_'.$fileAction_name;

			move_uploaded_file($fileAction_tmp_name, $upload_file);
		}

		$data = array(
			'is_hq_app_reject_revert'=>0,
			'is_first_sanction'=>1,
			'sanction_letter'=>$fileAction_name,
			'sanction_remarks'=>$remarks
		);

		$res1 = $this->headq_m->update_application_master($application_id,$data);


		$data_remarks = array(
			'application_id'=>$application_id,
			'user_id'=>$user_id,
			'remark_stat'=>15,
			'remarks'=>$remarks,
			'add_datetime'=>$datetime
		);

		$remark_id = $this->headq_m->add_remarks($data_remarks);

		
		if($_FILES['fileApp']['tmp_name']!=''){
			$all_remarks_attachment_data = array(
				'remark_id'=>$remark_id,
				'application_id'=>$application_id,
				'fileAttachment'=>$upload_file,
				'user_id'=>$user_id,
				'date_time'=>$datetime
			);
			$res2 = $this->headq_m->add_remarks_attachment($all_remarks_attachment_data);
		}

		if($res1==true)
		{
			$msg = "1##Application sanctioned successfully";
		}else{
			$msg = "2##Opps! some problem arrises, try again later";
		}

		echo $msg;

	}
	
	public function ajx_submit_1st_installment_release_by_hq(){
		/*print_r($_POST);
		print_r($_FILES); die;*/
		$h_action = $this->input->post('h_action');
		$user_id = $this->data['admin_uid'];
		$application_id = $this->input->post('h_application_id');
		$first_release_tv_no = $this->input->post('first_release_tv_no');
		$first_release_token_no = $this->input->post('first_release_token_no');
		$first_release_token_date = $this->input->post('first_release_token_date');
		$first_release_rbi_transaction = $this->input->post('first_release_rbi_transaction');
		$first_release_rbi_trans_date = $this->input->post('first_release_rbi_trans_date');
		$hq_project_amount = $this->input->post('hq_project_amount');
		$remarks = $this->input->post('remarks');
		$app_remarks = $this->input->post('app_remarks');
		$datetime = date('Y-m-d H:i:s');
		$first_installment_released_by_HQ=1;
		$is_dist_approve_1st_installment_release=0;

		$path = 'uploads/process_sanction/';

		if($_FILES['fileAction']['tmp_name']!=''){
			
			$fileAction_name = $_FILES['fileAction']['name'];
			$fileAction_tmp_name = $_FILES['fileAction']['tmp_name'];

			$time = time();
			$upload_file = $path.$time.'_'.$fileAction_name;

			move_uploaded_file($fileAction_tmp_name, $upload_file);
		}

		if($h_action ==3){
			$data = array(
				'apply_for_1st_installment_release'=>1,
				'is_dist_approve_1st_installment_release'=>$is_dist_approve_1st_installment_release,
				'first_installment_released_by_HQ'=>$h_action,
				'first_release_hq_remarks'=>$remarks
			);
		}else if($h_action ==2){
			$data = array(
				'is_dist_approve_1st_installment_release'=>$is_dist_approve_1st_installment_release,
				'first_installment_released_by_HQ'=>$h_action,
				'first_release_hq_remarks'=>$remarks
			);
		}else{
			$data = array(
				'is_dist_approve_1st_installment_release'=>$is_dist_approve_1st_installment_release,
				'first_installment_released_by_HQ'=>$h_action,
				'first_release_tv_no'=> $first_release_tv_no,
				'first_release_token_no'=> $first_release_token_no,
				'first_release_token_date'=> date("Y-m-d",strtotime($first_release_token_date)),
				'first_release_rbi_transaction'=> $first_release_rbi_transaction,
				'first_release_rbi_trans_date'=> date("Y-m-d",strtotime($first_release_rbi_trans_date)),
				'hq_project_amount'=> $hq_project_amount,
				'first_release_hq_remarks'=>$app_remarks
			);
			if($_FILES['fileAction']['tmp_name']!=''){
				$data = array(
					'government_order_letter'=>$fileAction_name,
				);
			}
		}
		
		/*echo("<pre>");
		print_r($data);
		die();
*/
		$res1 = $this->headq_m->update_application_master($application_id,$data);

		
		if($h_action ==3){
			$data_remarks = array(
				'application_id'=>$application_id,
				'user_id'=>$user_id,
				'remarks'=>$remarks,
				'remark_stat'=>26,
				'add_datetime'=>$datetime
			);
		}else if($h_action ==2){
			$data_remarks = array(
				'application_id'=>$application_id,
				'user_id'=>$user_id,
				'remarks'=>$remarks,
				'remark_stat'=>25,
				'add_datetime'=>$datetime
			);
		}else{
			$data_remarks = array(
				'application_id'=>$application_id,
				'user_id'=>$user_id,
				'remarks'=>$app_remarks,
				'remark_stat'=>24,
				'add_datetime'=>$datetime
			);
		}

		$remark_id = $this->headq_m->add_remarks($data_remarks);

		
		if($_FILES['fileAction']['tmp_name']!=''){
			$all_remarks_attachment_data = array(
				'remark_id'=>$remark_id,
				'application_id'=>$application_id,
				'fileAttachment'=>$fileAction_name,
				'user_id'=>$user_id,
				'date_time'=>$datetime
			);
			$res2 = $this->headq_m->add_remarks_attachment($all_remarks_attachment_data);
		}

		if($res1==true)
		{
			if($h_action==1)
			{
				$msg = "1##1st installment released successfully by HQ";
			}elseif($h_action==2){
				$msg = "2##1st installment rejected by HQ";
			}elseif($h_action==3){
				$msg = "3##1st installment reverted by HQ";
			}
			
		}else{
			$msg = "4##Opps! some problem arrises, try again later";
		}

		echo $msg;
	}
	
	
	public function ajx_submit_2nd_installment_release_by_hq(){
		/*print_r($_POST);
		print_r($_FILES); die;*/

		$h_action = $this->input->post('h_action');
		$user_id = $this->data['admin_uid'];
		$application_id = $this->input->post('h_application_id');
		$second_release_tv_no = $this->input->post('second_release_tv_no');
		$second_release_token_no = $this->input->post('second_release_token_no');
		$second_release_token_date = $this->input->post('second_release_token_date');
		$second_release_rbi_transaction = $this->input->post('second_release_rbi_transaction');
		$second_release_rbi_trans_date = $this->input->post('second_release_rbi_trans_date');
		$hq_second_release_amount = $this->input->post('hq_second_release_amount');
		$remarks = $this->input->post('remarks');
		$app_remarks = $this->input->post('app_remarks');
		$datetime = date('Y-m-d H:i:s');
		$second_installment_released_by_HQ=1;
		$is_dist_approve_2nd_installment_release=0;

		$path = 'uploads/process_sanction/';

		if($_FILES['fileAction']['tmp_name']!=''){
			
			$fileAction_name = $_FILES['fileAction']['name'];
			$fileAction_tmp_name = $_FILES['fileAction']['tmp_name'];

			$time = time();
			$upload_file = $path.$time.'_'.$fileAction_name;

			move_uploaded_file($fileAction_tmp_name, $upload_file);
		}
		
		if($_FILES['fileActionApp']['tmp_name']!=''){
			
			$fileAction_name = $_FILES['fileActionApp']['name'];
			$fileAction_tmp_name = $_FILES['fileActionApp']['tmp_name'];

			$time = time();
			$upload_file = $path.$time.'_'.$fileAction_name;

			move_uploaded_file($fileAction_tmp_name, $upload_file);
		}

		if($h_action ==3){
			$data = array(
				'apply_for_second_installment'=>1,
				'is_dist_approve_2nd_installment_release'=>$is_dist_approve_2nd_installment_release,
				'second_installment_released_by_HQ'=>$h_action,
				'second_release_remarks_by_hq'=>$remarks
			);
		}else if($h_action ==2){
			$data = array(
				'is_dist_approve_2nd_installment_release'=>$is_dist_approve_2nd_installment_release,
				'second_installment_released_by_HQ'=>$h_action,
				'second_release_remarks_by_hq'=>$remarks
			);
		}else{
			
			if($_FILES['fileActionApp']['tmp_name']!=''){
				$data = array(
				'is_dist_approve_2nd_installment_release'=>$is_dist_approve_2nd_installment_release,
				'second_installment_released_by_HQ'=>$h_action,
				'second_release_tv_no'=> $second_release_tv_no,
				'second_release_token_no'=> $second_release_token_no,
				'second_release_token_date'=> date("Y-m-d",strtotime($second_release_token_date)),
				'second_release_rbi_transaction'=> $second_release_rbi_transaction,
				'second_release_rbi_trans_date'=> date("Y-m-d",strtotime($second_release_rbi_trans_date)),
				'hq_second_release_amount'=> $hq_second_release_amount,
				'government_order_letter_second'=>$fileAction_name,
				'second_release_remarks_by_hq'=>$app_remarks
			);
			}else{
				$data = array(
				'is_dist_approve_2nd_installment_release'=>$is_dist_approve_2nd_installment_release,
				'second_installment_released_by_HQ'=>$h_action,
				'second_release_tv_no'=> $second_release_tv_no,
				'second_release_token_no'=> $second_release_token_no,
				'second_release_token_date'=> date("Y-m-d",strtotime($second_release_token_date)),
				'second_release_rbi_transaction'=> $second_release_rbi_transaction,
				'second_release_rbi_trans_date'=> date("Y-m-d",strtotime($second_release_rbi_trans_date)),
				'hq_second_release_amount'=> $hq_second_release_amount,
				'second_release_remarks_by_hq'=>$app_remarks
			);
			}
		}
		
		/*echo("<pre>");
		print_r($data);
		die();
*/
		$res1 = $this->headq_m->update_application_master($application_id,$data);

		
		if($h_action ==3){
			$data_remarks = array(
				'application_id'=>$application_id,
				'user_id'=>$user_id,
				'remarks'=>$remarks,
				'remark_stat'=>29,
				'add_datetime'=>$datetime
			);
		}else if($h_action ==2){
			$data_remarks = array(
				'application_id'=>$application_id,
				'user_id'=>$user_id,
				'remarks'=>$remarks,
				'remark_stat'=>28,
				'add_datetime'=>$datetime
			);
		}else{
			$data_remarks = array(
				'application_id'=>$application_id,
				'user_id'=>$user_id,
				'remarks'=>$app_remarks,
				'remark_stat'=>27,
				'add_datetime'=>$datetime
			);
		}

		$remark_id = $this->headq_m->add_remarks($data_remarks);

		
		if($_FILES['fileAction']['tmp_name']!='' || $_FILES['fileActionApp']['tmp_name']!=''){
			$all_remarks_attachment_data = array(
				'remark_id'=>$remark_id,
				'application_id'=>$application_id,
				'fileAttachment'=>$fileAction_name,
				'user_id'=>$user_id,
				'date_time'=>$datetime
			);
			$res2 = $this->headq_m->add_remarks_attachment($all_remarks_attachment_data);
		}

		if($res1==true)
		{
			if($h_action==1)
			{
				$msg = "1## 2nd installment released successfully by HQ";
			}elseif($h_action==2){
				$msg = "2## 2nd installment rejected by HQ";
			}elseif($h_action==3){
				$msg = "3## 2nd installment reverted by HQ";
			}
			
		}else{
			$msg = "4##Opps! some problem arrises, try again later";
		}

		echo $msg;
	}
    
}
