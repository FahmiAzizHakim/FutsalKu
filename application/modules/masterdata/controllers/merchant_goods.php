<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchant_Goods extends MY_Controller {

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
		$data = json_decode(($this->curl->simple_get($this->API.'Master_data/data_goods', $param)), true);
		$this->templates->assign( 'data_barang', $data);
    	$this->layout('merchant_goods/lists', '');
	}

	public function add()
	{
		$this->layout('merchant_goods/add', '');
	}

	public function edit()
	{
		$param_user = array('company_code' => $this->s_company_code,
									'id' => $this->input->get('user_id'));
		$userdata = json_decode(($this->curl->simple_get($this->API.'Master_data/single_user', $param_user)), true);

		$param_fieldtype = array('code_category' => 'USR');
		$field_role = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_fieldtype)), true);

		$this->templates->assign( 'role', $field_role);
		$this->templates->assign( 'userdata', $userdata);
		$this->layout('merchant_goods/edit', '');
	}
}