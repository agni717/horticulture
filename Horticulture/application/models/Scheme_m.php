<?php

class Scheme_M extends MY_Model {

    function __construct() {
		
        parent::__construct();
    }
	
	public function scheme_submit($data)
    {
    $query=$this->db->insert('schemes_master',$data);
    if($query==true)
    {
        return true;
    }else{
            return false;
        }
    }
	
	public function get_schemes()
    { 
        $this->db->select('*');
        $this->db->from('schemes_master');
        
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
          return $query->result();
        }else{
          return false;
        }
    }
	
	public function scheme_update($id,$data)
    { 
        $this->db->where('id',$id);
        $query=$this->db->update('schemes_master',$data);
     
        if($query==true)
        {
            return true;
        }else{
            return false;
        }
    }
    public function get_schemes_id($id)
    { 
        $this->db->select('*');
        $this->db->from('schemes_master');
        $this->db->where('id',$id);
        
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
          return $query->result();
        }else{
          return false;
        }
    }
	
	public function total_applicant($scheme_id)
    {
       /*$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_applicant_submitted='2' AND is_district_app_reject_revert='1'"); */ 

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND application_no != ''");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND application_no != ''");
		}
	   
		
        return $query->num_rows();
    }
	
	public function total_pending($scheme_id)
    {
       /*$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_applicant_submitted='2' AND is_district_app_reject_revert='1'"); */ 

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_applicant_submitted='2'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_applicant_submitted='2'");
		}
	   
		
        return $query->num_rows();
    }
	
	public function approved_by_district($scheme_id)
    {
       /*$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_district_app_reject_revert='1' AND is_applicant_submitted='2'");*/ 
	   if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
		   $query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_district_app_reject_revert='1'");
		}else{
		   $query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_district_app_reject_revert='1'");
	   }
		
        return $query->num_rows();
    }
    public function reject_by_district($scheme_id)
    {
       /*$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_district_app_reject_revert='2' AND is_applicant_submitted='2'");*/ 

	   if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
		   $query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_district_app_reject_revert='2'");
		}else{
		   $query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_district_app_reject_revert='2'");
	   }
		
        return $query->num_rows();
    }
	public function reverted_by_district($scheme_id)
    {
       /*$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_district_app_reject_revert='2' AND is_applicant_submitted='2'");*/ 

	   if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
		   $query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_district_app_reject_revert='3'");
		}else{
		   $query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_district_app_reject_revert='3'");
	   }
		
        return $query->num_rows();
    }
	public function approved_by_hq($scheme_id)
    {
       /*$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_district_app_reject_revert='1' AND is_applicant_submitted='2'");*/ 
	   if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
		   $query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_hq_app_reject_revert='1'");
		}else{
		   $query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_hq_app_reject_revert='1'");
	   }
		
        return $query->num_rows();
    }
    public function reject_by_hq($scheme_id)
    {
       /*$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_district_app_reject_revert='2' AND is_applicant_submitted='2'");*/ 

	   if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
		   $query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_hq_app_reject_revert='2'");
		}else{
		   $query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_hq_app_reject_revert='2'");
	   }
		
        return $query->num_rows();
    }
	public function reverted_by_hq($scheme_id)
    {
       /*$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_district_app_reject_revert='2' AND is_applicant_submitted='2'");*/ 

	   if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
		   $query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_hq_app_reject_revert='3'");
		}else{
		   $query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_hq_app_reject_revert='3'");
	   }
		
        return $query->num_rows();
    }
    public function project_sanctioned_by_hq($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_first_sanction='1'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_first_sanction='1'");
		}
          
        return $query->num_rows();
    }
	public function proj_1st_installment_release_requested($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND apply_for_1st_installment_release='1'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND apply_for_1st_installment_release='1'");
		}
          
        return $query->num_rows();
    }
	public function proj_1st_installment_approve_by_dist($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_dist_approve_1st_installment_release='1'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_dist_approve_1st_installment_release='1'");
		}
          
        return $query->num_rows();
    }
	public function proj_1st_installment_reject_by_dist($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_dist_approve_1st_installment_release='2'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_dist_approve_1st_installment_release='2'");
		}
          
        return $query->num_rows();
    }
	public function proj_1st_installment_revert_by_dist($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_dist_approve_1st_installment_release='3'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_dist_approve_1st_installment_release='3'");
		}
          
        return $query->num_rows();
    }
	public function proj_1st_installment_release_hq($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND first_installment_released_by_HQ='1'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND first_installment_released_by_HQ='1'");
		}
          
        return $query->num_rows();
    }
	public function proj_1st_installment_reject_hq($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND first_installment_released_by_HQ='2'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND first_installment_released_by_HQ='2'");
		}
          
        return $query->num_rows();
    }
	public function proj_1st_installment_revert_hq($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND first_installment_released_by_HQ='3'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND first_installment_released_by_HQ='3'");
		}
          
        return $query->num_rows();
    }
	
	public function proj_2nd_installment_release_requested($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND apply_for_second_installment='1'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND apply_for_second_installment='1'");
		}
          
        return $query->num_rows();
    }
	public function proj_2nd_installment_approve_by_dist($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_dist_approve_2nd_installment_release='1'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_dist_approve_2nd_installment_release='1'");
		}
          
        return $query->num_rows();
    }
	public function proj_2nd_installment_reject_by_dist($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_dist_approve_2nd_installment_release='2'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_dist_approve_2nd_installment_release='2'");
		}
          
        return $query->num_rows();
    }
	public function proj_2nd_installment_revert_by_dist($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND is_dist_approve_2nd_installment_release='3'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND is_dist_approve_2nd_installment_release='3'");
		}
          
        return $query->num_rows();
    }
	
	public function proj_2nd_installment_release_by_hq($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND second_installment_released_by_HQ='1'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND second_installment_released_by_HQ='1'");
		}
          
        return $query->num_rows();
    }
	
	public function proj_2nd_installment_rejected_by_hq($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND second_installment_released_by_HQ='2'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND second_installment_released_by_HQ='2'");
		}
          
        return $query->num_rows();
    }
	
	public function proj_2nd_installment_reverted_by_hq($scheme_id)
    {

		if(isset($this->session->userdata['district'])){
			$district = $this->session->userdata['district'];
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND proj_district='$district' AND second_installment_released_by_HQ='3'");
		}else{
			$query=$this->db->query(" SELECT * FROM  application_master WHERE scheme_id='$scheme_id' AND second_installment_released_by_HQ='3'");
		}
          
        return $query->num_rows();
    }
	
	public function update_application_master($application_id,$data)
    {
        $this->db->where('application_id',$application_id);
        $query = $this->db->update('application_master',$data);

        if($query==true)
        {
            return true;
        }else{
            return false;
        }
    }
	
	public function add_remarks($data)
    {
        $query = $this->db->insert('all_remarks',$data);

        if($query==true)
        {
            return $this->db->insert_id();
        }else{
            return false;
        }
    }

    public function add_remarks_attachment($data)
    {
        $query = $this->db->insert('all_remarks_attachment',$data);

        if($query==true)
        {
            return true;
        }else{
            return false;
        }
    }
	
	public function get_product_list($id=null)
    { 
        $this->db->select('*');
        $this->db->from('product_master');
        if($id!="" || $id!=null)
        {
            $this->db->where('prod_id',$id);
        }
        $query = $this->db->get();
        if($query->num_rows()>0)
        {
			if($id!="" || $id!=null)
			{
				return $query->row();
			}else{
				return $query->result();
			}
          
        }else{
          return false;
        }
    }
	
	public function submit_product_form($data,$id){
		if($id != '' || !empty($id)){
			$this->db->where('prod_id',$id);
    		$query = $this->db->update('product_master',$data);
		}else{
			$query = $this->db->insert('product_master',$data);
		}
		
       	
        if($query==true)
        {
            return true;
        }else{
            return false;
        }
	}
	
	public function update_applicant_status($data, $prod_id){
		$this->db->where('prod_id',$prod_id);
        $query = $this->db->update('product_master',$data);

        if($query==true)
        {
            return true;
        }else{
            return false;
        }
	}
}