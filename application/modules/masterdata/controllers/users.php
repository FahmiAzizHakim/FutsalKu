<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
    	$this->layout('users/lists', '');
	}
	public function add()
	{
		$this->layout('users/add', '');
	}
}