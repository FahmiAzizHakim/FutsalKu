<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_id') == ''){
			redirect('Login','refresh');
		}

	}

	public function index()
	{
		$param = array('company_code' => $this->s_company_code);
		$data_user = json_decode(($this->curl->simple_get($this->API.'Master_data/data_users', $param)), true);
		$this->templates->assign( 'data_users', $data_user);
    	$this->layout('users/lists', '');
	}

	public function add()
	{
		$param_usertype = array('code_category' => 'USR');
		$user_role = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_fieldtype)), true);

		$this->templates->assign( 'role', $user_role);
		$this->layout('users/add', '');
	}

	public function edit()
	{
		$param_user = array('company_code' => $this->s_company_code,
									'id' => $this->input->get('user_id'));
		$userdata = json_decode(($this->curl->simple_get($this->API.'Master_data/single_user', $param_user)), true);

		$param_usertype = array('code_category' => 'USR');
		$user_role = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_usertype)), true);

		$this->templates->assign( 'role', $user_role);
		$this->templates->assign( 'userdata', $userdata);
		$this->layout('users/edit', '');
	}
}