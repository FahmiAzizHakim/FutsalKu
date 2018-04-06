<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
    	$this->layout_empty('login', '');
	}

	function check_user(){
		$param = array("username" => $this->input->post('username'),
						"password" => $this->input->post('password'));
		$data = json_decode(($this->curl->simple_post($this->API.'Auth/check_user', $param)), true);
		if($data['status'] == "success"){
			foreach($data['data'] as $sess){
	        	$sess_data['user_code'] = $sess['user_code'];
	    	    $sess_data['user_id'] = $sess['user_id'];
	    	    $sess_data['user_name'] = $sess['user_name'];
	        	$sess_data['user_role'] = $sess['user_group'];
	    	    $sess_data['user_company_code'] = $sess['company_code'];
	    	}
        	$this->session->set_userdata($sess_data);
    	}
    	echo json_encode($data);
    }

    function logout()
  	{
    	$this->session->sess_destroy();
    	redirect('/');
  	}

}