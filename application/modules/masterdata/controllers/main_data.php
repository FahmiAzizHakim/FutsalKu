<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Data extends MY_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$param = array('company_code' => 'RDCNT');
		$data = json_decode(($this->curl->simple_get($this->API.'Master_data/data_company', $param)), true);
		// print_r($data);die;
		$this->templates->assign( 'data_company', $data);
    	$this->layout('main_data/index', '');
	}
	public function add()
	{
		$this->layout('lapangan/add', '');
	}
}