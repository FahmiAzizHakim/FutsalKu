<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchant_Goods extends MY_Controller {

	function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
    	$this->layout('merchant_goods/lists', '');
	}
	public function add()
	{
		$this->layout('merchant_goods/add', '');
	}
}