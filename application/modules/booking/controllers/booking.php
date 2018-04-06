<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booking extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_id') == ''){
			redirect('Login','refresh');
		}

	}

	// public function index()
	// {
 //    	$this->layout('lists', '');
	// }
	public function add()
	{
		$this->layout('add', '');
	}

}