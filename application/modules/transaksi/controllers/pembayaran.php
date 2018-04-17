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

	public function acceptment()
	{
		$param_lst_fieldno = array('data' => 'fin_id', 'table' => 'FIN_HISTORY', 'company_code' => $this->s_company_code);
		$get_last_no = json_decode(($this->curl->simple_get($this->API.'Global_Api/last_no', $param_lst_fieldno)), true);
		$last_no = $get_last_no['data']+1;
		$fin_no = $this->s_company_code.'-'.$last_no;

		// $param_trx = array('trx_no' => $this->post("trx_no"));
		$param_trx = array('param_no' => $this->input->post("param_no"));
		// print_r($this->API.'Pembayaran/data_mbooking');die;
		$get_dmbooking = json_decode(($this->curl->simple_post($this->API.'Pembayaran/data_mbooking', $param_trx)), true);
		$get_ddbooking = json_decode(($this->curl->simple_post($this->API.'Pembayaran/data_dbooking', $param_trx)), true);
		// print_r($get_dmbooking);
		// print_r($get_ddbooking);
		// die;
		$this->layout('pembayaran/lists', '');
	}

}