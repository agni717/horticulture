<?php

class Admin_M extends MY_Model {

    function __construct() {
        parent::__construct();
    }

    public function checklogin($username, $password) {

        $sql = $this->db->select('*')->from('user_master')->where('user_name', $username)->where('password', $password)->where('status', '1');
        $res = $this->db->get();
        //var_dump($sql);


        if ($res->num_rows() > 0) {
            $data = $res->row_array();
			//
			if($data["u_type"]==2){
				$this->session->set_userdata('uid', $data["id"]);
				$this->session->set_userdata('username', $data["user_name"]);
				$this->session->set_userdata('utype', $data["u_type"]);
				$this->session->set_userdata('district', $data["district"]);
				$this->session->set_userdata('distloggedin', TRUE);
				return true;
			}else if($data["u_type"]==1){
				$this->session->set_userdata('uid', $data["id"]);
				$this->session->set_userdata('username', $data["user_name"]);
				$this->session->set_userdata('utype', $data["u_type"]);
				$this->session->set_userdata('hqloggedin', TRUE);
				return true;
			}else{
				return false;
			}
			
			
            
			
            
        } else {
            return false;
        }

        $res->free_result();
    }

    public function hqloggedin() {

        return (bool) $this->session->userdata('hqloggedin');
    }
	
	public function distloggedin() {

        return (bool) $this->session->userdata('distloggedin');
    }


    public function hash($string) {

        return hash('sha512', $string . config_item('encryption_key'));
    }
	
	public function get_user_id_by_application_id($appid)
    {
        $this->db->select('user_id');
        
		$this->db->from('application_master');
		$this->db->where('application_id',$appid);
		$query = $this->db->get();
		
        //$query = $this->db->get();
		
        if($query->num_rows()==0)
        {
            return false;
        }else{
            return $query->row()->user_id;
            //return $query->row();
        }
    }
	
	//Dashboard Search Application List Start
	public function get_App_list($data,$dist = NULL){
		$this->db->select('am.*,rm.*');
        
		$this->db->from('application_master as am');
		$this->db->join('user_info as rm','rm.u_id=am.user_id','left');
		$this->db->where($data);
		if($dist != NULL){
			$this->db->where('proj_district',$dist);
		}
		$query = $this->db->get();
		
        //$query = $this->db->get();
		
        if($query->num_rows()==0)
        {
            return false;
        }else{
            return $query->result();
            //return $query->row();
        }
	}
	//Dashboard Search Application List Start
	
	public function get_application_list($param_data)
    {
		
        extract($param_data);
        if(isset($application_id) && $application_id !='')
        {
        $this->db->where('application_id',$application_id);
        }
		if(isset($district) && $district !='')
        {
        $this->db->where('proj_district',$district);
        }
        if(isset($scheme_id) && $scheme_id !='')
        {
        $this->db->where('scheme_id',$scheme_id);
        }
        
		if(isset($is_applicant_submitted) && $is_applicant_submitted!='')
        {
        $this->db->where('is_applicant_submitted',$is_applicant_submitted);
        }
        if(isset($is_district_app_reject_revert) && $is_district_app_reject_revert!='')
        {
        $this->db->where('is_district_app_reject_revert',$is_district_app_reject_revert);
        }
        if(isset($is_hq_app_reject_revert) && $is_hq_app_reject_revert!='')
        {
        $this->db->where('is_hq_app_reject_revert',$is_hq_app_reject_revert);
        }

        if(isset($is_first_sanction) && $is_first_sanction!='')
        {
            $this->db->where('is_first_sanction',$is_first_sanction);
        }
		
		if(isset($apply_for_1st_installment_release) && $apply_for_1st_installment_release!='')
        {
            $this->db->where('apply_for_1st_installment_release',$apply_for_1st_installment_release);
        }


        if(isset($is_project_cost_updated_dist) && $is_project_cost_updated_dist!='')
        {
            $this->db->where('is_project_cost_updated_dist',$is_project_cost_updated_dist);
        }

        if(isset($is_dist_approve_1st_installment_release) && $is_dist_approve_1st_installment_release!='')
        {
            $this->db->where('is_dist_approve_1st_installment_release',$is_dist_approve_1st_installment_release);
        }
		if(isset($first_installment_released_by_HQ) && $first_installment_released_by_HQ!='')
        {
            $this->db->where('first_installment_released_by_HQ',$first_installment_released_by_HQ);
        }
		if(isset($apply_for_second_installment) && $apply_for_second_installment!='')
        {
            $this->db->where('apply_for_second_installment',$apply_for_second_installment);
        }
		if(isset($is_dist_approve_2nd_installment_release) && $is_dist_approve_2nd_installment_release!='')
        {
            $this->db->where('is_dist_approve_2nd_installment_release',$is_dist_approve_2nd_installment_release);
        }
		if(isset($second_installment_released_by_HQ) && $second_installment_released_by_HQ!='')
        {
            $this->db->where('second_installment_released_by_HQ',$second_installment_released_by_HQ);
        }
        $this->db->select('am.*,u.u_mobile as mobile,u.u_email as email,u.first_name,u.middle_name,u.last_name,s.scheme_name,dist.district_name,sdiv.subdiv_name,blk.block_name,panch.panchayat_name');
        //$this->db->select('application_master.application_id,application_master.name,application_master.email,user_info.mobile');
        $this->db->from('application_master as am');
        //$this->db->join('rem_registration_master as u', 'u.sch_id = am.scheme_id');
		$this->db->join('user_info as u', 'u.u_id = am.user_id');  
        $this->db->join('schemes_master as s', 'am.scheme_id = s.id'); 
        
		$this->db->join('district_master as dist', 'dist.district_code = am.proj_district');
		$this->db->join('subdivision_tab as sdiv', 'sdiv.subdiv_id = am.proj_sub_division');
		$this->db->join('block_master as blk', 'blk.block_id = am.proj_block');
		$this->db->join('panchayat_master as panch', 'panch.panchayat_id = am.proj_gram_panchayat');
		$this->db->group_by('am.application_id');
        //$this->db->join('schemes_master', 'schemes_master.id = application_master.scheme_id');       
        $query = $this->db->get();
		//echo($query); die();
        if($query->num_rows()>0){
            return $query->result();
            //return $query->count_all_results();
        }else{
            return false;
        }
        
    }
	
	//Citizen form details queries start
	public function get_application_master_data($application_id)
    {
        $this->db->select('am.*,rm.first_name,rm.middle_name,rm.last_name,rm.u_mobile as mobile,rm.u_email as email,rm.u_village as village,rm.u_post_office as post_office,rm.u_pincode as pincode,rm.u_image as image,udist.district_name as district_name,usdiv.subdiv_name as subdiv_name,ublk.block_name as block_name,upanch.panchayat_name as panchayat_name,dist.district_name as proj_district_name,sdiv.subdiv_name as proj_subdiv_name,blk.block_name as proj_block_name,panch.panchayat_name as proj_panchayat_name,bm.bank_name,b.branch_name,b.IFSCCODE as ifsc');
        $this->db->from('application_master as am');
		//$this->db->join('rem_registration_master as rm','rm.user_id=am.user_id','left');
		$this->db->join('user_info as rm','rm.u_id=am.user_id','left');
		
		$this->db->join('district_master as udist', 'udist.district_code = rm.u_district');
		$this->db->join('subdivision_tab as usdiv', 'usdiv.subdiv_id = rm.u_sub_division');
		$this->db->join('block_master as ublk', 'ublk.block_id = rm.u_block');
		$this->db->join('panchayat_master as upanch', 'upanch.panchayat_id = rm.u_gram_panchayat');
		
		$this->db->join('district_master as dist', 'dist.district_code = am.proj_district');
		$this->db->join('subdivision_tab as sdiv', 'sdiv.subdiv_id = am.proj_sub_division');
		$this->db->join('block_master as blk', 'blk.block_id = am.proj_block');
		$this->db->join('panchayat_master as panch', 'panch.panchayat_id = am.proj_gram_panchayat');
		
		$this->db->join('bank_master as bm','bm.bank_id=am.proj_bank_name','left');
		$this->db->join('branch_master as b','b.branch_id=am.proj_branch','left');
        $this->db->where('application_id',$application_id);
        $query = $this->db->get();

        if($query->num_rows()==0)
        {
            return false;
        }else{
            //return $query->result();
            return $query->row();
        }
    }
	
	public function get_industry_master_data($id="",$application_id="")
    {
        if($id!=""){
            $this->db->where('industry_id',$id);
        }
        if($application_id!=""){
            $this->db->where('industry_application_id',$application_id);
        }
        $this->db->select('indm.*,udist.district_name as ind_district_name,usdiv.subdiv_name as ind_subdiv_name,ublk.block_name as ind_block_name,upanch.panchayat_name as ind_panchayat_name');
        $this->db->from('industry_master as indm');
		
		$this->db->join('district_master as udist', 'udist.district_code = indm.industry_district');
		$this->db->join('subdivision_tab as usdiv', 'usdiv.subdiv_district = udist.district_code AND usdiv.subdiv_id = indm.industry_Sub_Division');
		$this->db->join('block_master as ublk', 'ublk.district_id = udist.district_code AND ublk.subd_id = usdiv.subdiv_id AND ublk.block_id = indm.industry_Block');
		$this->db->join('panchayat_master as upanch', 'upanch.gram_block_id = ublk.block_id AND upanch.dist_id = udist.district_code AND upanch.div_id = usdiv.subdiv_id AND upanch.panchayat_id = indm.industry_gram_panchayat');
		
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }
    }
	
	public function get_plant_machinary_data($application_id)
    {
        $this->db->select('*');
        $this->db->from('applicant_plant_machinary');
        $this->db->where('pm_application_id',$application_id);
        $query = $this->db->get();

        if($query->num_rows()==0)
        {
            return false;
        }else{
            return $query->result();
            //return $query->row();
        }
    }
	
	public function get_document_upload_master_data()
	{
		$this->db->select('*');
		$this->db->from('document_upload_master');
		$this->db->where('status',1);
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			return $query->result();
		}else{
			return false;
		}
	}

	public function get_submitted_file($application_id,$document_id)
	{
		$this->db->select('dum.*,dm.file_document_ms,dm.file_application_id,dm.file_name,dm.district_remarks');
		$this->db->from('document_master as dm');
		$this->db->join('document_upload_master as dum','dm.file_document_ms=dum.doc_id','left');
		$this->db->where(array('dm.file_application_id'=>$application_id,'dm.file_document_ms'=>$document_id));
		$query = $this->db->get();
		if($query->num_rows()>0)
		{
			return $query->row();
		}else{
			return false;
		}
	}
	
	public function document_list($id)
    {
        if($id!="")
        {
            $this->db->where('dm.file_application_id',$id);
        }
        $this->db->select('*');
        $this->db->from('document_master as dm');
        $this->db->join('document_upload_master as dum','dm.file_document_ms=dum.doc_id');
        $query = $this->db->get();
        if($query->num_rows()>0){
            return $query->result();
        }else{
            return false;
        }

    }
	
	//Citizen form details queries end
	
	public function get_registration_master_data($user_id)
    {
        $this->db->select('rm.*,d.district_name,st.subdiv_name,bm.block_name,pm.panchayat_name');
        $this->db->from('user_info as rm');
        $this->db->join('district_master as d','rm.u_district=d.district_code','left');
		$this->db->join('subdivision_tab as st','rm.u_sub_division=st.subdiv_id','left');
		$this->db->join('block_master as bm','rm.u_block=bm.block_id','left');
		$this->db->join('panchayat_master as pm','rm.u_gram_panchayat=pm.panchayat_id','left');
		
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();

        if($query->num_rows()==0)
        {
            return false;
        }else{
            return $query->result();
            //return $query->row();
        }
    }
    public function get_district_data()
    {
        $this->db->select('*');
        $this->db->from('district_master');
        //$this->db->where('status',1);
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->result();
        }else{
            return false;
        }

    }
    public function submit_disctrict_user_form($data,$id)
    {
		if($id != '' || !empty($id)){
			$this->db->where('id',$id);
    		$query = $this->db->update('user_master',$data);
		}else{
			$query = $this->db->insert('user_master',$data);
		}
		
       	
        if($query==true)
        {
            return true;
        }else{
            return false;
        }
    }
    public function get_district_admin_list()
    {
        $this->db->select('um.*,dm.district_name');
        $this->db->from('user_master as um');
        $this->db->join('district_master as dm','dm.district_code=um.district','left');
        $this->db->where('u_type',2);
        //$this->db->order_by('id', 'asc');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->result();
        }else{
            return false;
        }

    }
    
 public function get_edit_user($id)

    {//$this->db->get_where("application_master",  array("id"=>$id));
        
        $this->db->select('*');
        $this->db->from('user_master');
        $this->db->where('id',$id);
        
        $query = $this->db->get();
	 	return $query->row();
        
        
    }
    public function get_district_list()
  {
    $this->db->select('*');
    $this->db->from('district_master');
    
    $query = $this->db->get();
    if($query->num_rows()>0)
    {
      return $query->result();
    }else{
      return false;
    }
  }
  
	public function get_remarks_data($application_id){
		$this->db->select('ar.remark_id, ar.application_id, ar.user_id, ar.remarks, ar.remark_stat, ar.add_datetime, GROUP_CONCAT(rat.fileAttachment SEPARATOR ",") as fileAttachment');
        $this->db->from('all_remarks as ar');
        $this->db->join('all_remarks_attachment as rat','rat.remark_id=ar.remark_id','left');
		$this->db->where('ar.application_id',$application_id);
		$this->db->group_by('ar.remark_id, ar.user_id, ar.remark_stat');
        $this->db->order_by('ar.remark_id', 'asc');
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
            return $query->result();
        }else{
            return false;
        }
	}
	
	public function get_remark_status($status){
		if($status == 8){
			return 'Application Submitted';
		}else if($status == 9){
			return 'Application approved by district';
		}else if($status == 10){
			return 'Application rejected by district';
		}else if($status == 11){
			return 'Application reverted by district';
		}else if($status == 12){
			return 'Application approved by HQ';
		}else if($status == 13){
			return 'Application rejected by HQ';
		}else if($status == 14){
			return 'Application reverted by HQ';
		}else if($status == 15){
			return 'Application sanctioned';
		}else if($status == 16){
			return '1st installment initiated';
		}else if($status == 17){
			return '1st installment approved by district';
		}else if($status == 18){
			return '1st installemnt rejected by district';
		}else if($status == 19){
			return '1st installemnt reverted by district';
		}else if($status == 20){
			return '2nd installment initiated';
		}else if($status == 21){
			return '2nd installment approved by district';
		}else if($status == 22){
			return '2nd installemnt rejected by district';
		}else if($status == 23){
			return '2nd installemnt reverted by district';
		}else if($status == 24){
			return '1st Installment Approved by HQ';
		}else if($status == 25){
			return '1st Installment Rejected by HQ';
		}else if($status == 26){
			return '1st Installment Reverted by HQ';
		}else if($status == 27){
			return '2nd Installment Approved by HQ';
		}else if($status == 28){
			return '2nd Installment Rejected by HQ';
		}else if($status == 29){
			return '2nd Installment Reverted by HQ';
		}else{
			return 'Application in process';
		}

	}
	
}
