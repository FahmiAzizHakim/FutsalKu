<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan extends MY_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$param = array('company_code' => 'RDCNT');
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

		$this->templates->assign( 'day_type', $day_type);
		$this->templates->assign( 'field_room', $field_room);
		$this->templates->assign( 'field_type', $field_type);
		$this->layout('lapangan/add', '');
	}
}