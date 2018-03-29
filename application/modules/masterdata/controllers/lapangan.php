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
		$data = json_decode(($this->curl->simple_get($this->API.'Kontak/data_field', $param)), true);
		// print_r($data);
		// die();
		$this->templates->assign( 'data_lapangan', $data);
    	$this->layout('lapangan/lists', '');
	}
	public function add()
	{
		$this->layout('lapangan/add', '');
	}
}