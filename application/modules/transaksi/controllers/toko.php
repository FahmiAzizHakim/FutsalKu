<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class toko extends MY_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
    	$this->layout('toko/lists', '');
	}
	public function add()
	{
		$this->layout('toko/add', '');
	}
}