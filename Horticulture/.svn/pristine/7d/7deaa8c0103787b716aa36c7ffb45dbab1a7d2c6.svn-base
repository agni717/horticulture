<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard_dist extends Dist_Controller {
	
	 public function __construct() {
        parent::__construct();

        //$this->data["u_details"] = $this->admin_m->GetDetailsofUsers($this->session->userdata['uid']);
        
    }
	
	public function index() {
		$this->data['scheme_data'] = $this->scheme_m->get_schemes();
		$this->load->view('admin/home', $this->data);
	}
}