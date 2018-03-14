<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends MY_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
    	$this->layout('members/lists', '');
	}
	public function add()
	{
		$this->layout('members/add', '');
	}
}