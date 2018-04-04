<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$param = array('company_code' => 'RDCNT');
		$field_user = json_decode(($this->curl->simple_get($this->API.'Master_data/data_users', $param)), true);
		$this->templates->assign( 'data_users', $field_user);
    	$this->layout('users/lists', '');
	}
	public function add()
	{
		$param_fieldtype = array('code_category' => 'USR');
		$field_role = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_fieldtype)), true);

		$this->templates->assign( 'role', $field_role);
		$this->layout('users/add', '');
	}
}