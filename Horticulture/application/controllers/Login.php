<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends Application_Controller {
	
	function __construct() {
        parent::__construct();
    }
	
	public function index()
	{
		$member = 'member';
        if($this->application->member_loggedin() == TRUE) redirect($member);
        
        // Set form
        if ($_POST) {
				    
		            $uid = $this->input->post('username');
		            $pwd = $this->input->post('password');
		            
		            $this->form_validation->set_error_delimiters('<span style="color:#F00;font-size:10px;">', '</span>');
		            
		            $this->form_validation->set_rules("username", "Mobile", "trim|required|xss_clean");
		            $this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");
		            

						// Process the form
		            	if ($this->form_validation->run() == TRUE) {
		            	
			                if ($this->loginprocess_member($uid, $pwd) == true) {
			                    //redirect($this->input->server('HTTP_REFERER'));
			                    
			                    $now = array(
			                        'f_last_aceesstime' => date('Y-m-d H:i:s'),
			                        'f_last_accessip' => $this->input->ip_address()
			                    );

			                    $this->application->update_user_modified($now);

			                    redirect("member");
			                } else {
			                    $this->data["error"] = 'Sorry Wrong Mobile No. or Password';
			                }
			            
		            }
					
		     }
        
	        
		$this->load->view('main/login_view',$this->data);
	}
	
	protected function loginprocess_member($uid, $pwd) {

        $username = $this->security->sanitize_filename($uid);
        $password = $this->application->hash($pwd);
        
        $boolean = $this->application->checklogin_member($username, $password);

        return $boolean;
    }
	
}