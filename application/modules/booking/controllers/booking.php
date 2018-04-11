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

	public function index()
	{
		$param = array('company_code' => $this->s_company_code);

		$get_booking_data = json_decode(($this->curl->simple_get($this->API.'Booking_data/data_booking', $param )), true);

		$this->templates->assign('get_booking_data',$get_booking_data);
    	$this->layout('lists', '');
	}

	public function add()
	{
		$param_lst_fieldno = array('data' => 'trx_id', 'table' => 'TRX_FIELDMESSAGES', 'company_code' => $this->s_company_code);

		$get_field_no = json_decode(($this->curl->simple_get($this->API.'Booking_data/data_field', $param_lst_fieldno)), true);

		$get_last_no = json_decode(($this->curl->simple_get($this->API.'Booking_data/last_no', $param_lst_fieldno)), true);

		$last_no = $get_last_no['data']+1;
		$field_no = $this->s_company_code.'-'.$last_no;
		$this->templates->assign('field_no',$field_no);
		$this->templates->assign('get_field_no',$get_field_no);
		$this->templates->assign('date',date("H:i"));
		$this->layout('add', '');
	}

}