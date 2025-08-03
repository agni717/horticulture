<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dist_head extends Dist_Controller {
	
	 public function __construct() {
        parent::__construct();

        //$this->data["u_details"] = $this->admin_m->GetDetailsofUsers($this->session->userdata['uid']);
        
    }
	
	
}