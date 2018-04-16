<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_id') == ''){
			redirect('Login','refresh');
		}

	}

	public function index()
	{
		$param = array('company_code' => $this->s_company_code);

		$get_booking_data = json_decode(($this->curl->simple_get($this->API.'Booking_data/data_booking', $param )), true);

		$this->templates->assign('get_booking_data',$get_booking_data);
    	$this->layout('pembayaran/lists', '');
	}

	

}