<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_Data extends MY_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
    	$this->layout('main_data/index', '');
	}
	public function add()
	{
		$this->layout('lapangan/add', '');
	}
}