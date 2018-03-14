<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapangan extends MY_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
    	$this->layout('lapangan/lists', '');
	}
	public function add()
	{
		$this->layout('lapangan/add', '');
	}
}