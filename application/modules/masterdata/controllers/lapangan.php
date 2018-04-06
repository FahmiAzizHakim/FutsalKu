<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan extends MY_Controller {

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
		$data = json_decode(($this->curl->simple_get($this->API.'Master_data/data_field', $param)), true);
		$this->templates->assign( 'data_lapangan', $data);
    	$this->layout('lapangan/lists', '');
	}
	public function add()
	{
		$param_fieldtype = array('code_category' => 'FLT');
		$field_type = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_fieldtype)), true);

		$param_fieldroom = array('code_category' => 'FLR');
		$field_room = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_fieldroom)), true);

		$param_day = array('code_category' => 'DYT');
		$day_type = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_day)), true);

		$param_lst_fieldno = array('data' => 'field_no', 'table' => 'MST_ADMFIELDS', 'company_code' => $this->s_company_code);
		$field_no = json_decode(($this->curl->simple_get($this->API.'Master_data/last_no', $param_lst_fieldno)), true);

		$this->templates->assign( 'day_type', $day_type);
		$this->templates->assign( 'field_no', $field_no['data']+1);
		$this->templates->assign( 'field_room', $field_room);
		$this->templates->assign( 'field_type', $field_type);
		$this->layout('lapangan/add', '');
	}
}