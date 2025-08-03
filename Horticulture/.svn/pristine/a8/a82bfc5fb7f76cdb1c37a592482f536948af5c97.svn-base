<?php

class District_m extends MY_Model {

    function __construct() {
        parent::__construct();
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
	
}
