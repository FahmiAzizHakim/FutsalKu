<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class list_booking extends MY_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
    	$this->layout('list_booking/lists', '');
	}
	public function add()
	{
		$this->layout('list_booking/add', '');
	}
}