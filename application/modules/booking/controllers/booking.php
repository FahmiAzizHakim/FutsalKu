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
		$param_lst_fieldno = array('data' => 'trx_id', 'table' => 'TRX_FIELDBOOKING', 'company_code' => $this->s_company_code);

		$get_field_no = json_decode(($this->curl->simple_get($this->API.'Booking_data/data_field', $param_lst_fieldno)), true);
		// print_r($get_field_no);die;
		$get_last_no = json_decode(($this->curl->simple_get($this->API.'Global_Api/last_no', $param_lst_fieldno)), true);

		$last_no = $get_last_no['data']+1;
		$field_no = $this->s_company_code.'-'.$last_no;
		$this->templates->assign('field_no',$field_no);
		$this->templates->assign('get_field_no',$get_field_no);
		$this->templates->assign('date',date("H:i"));
		$this->layout('add', '');
	}

	public function edit()
	{
		$param_lst_fieldno = array('data' => $this->input->get('trx_no'), 'table' => 'TRX_FIELDBOOKING', 'company_code' => $this->s_company_code);

		$get_field_no = json_decode(($this->curl->simple_get($this->API.'Booking_data/data_field', $param_lst_fieldno)), true);

		$get_single_data = json_decode(($this->curl->simple_get($this->API.'Booking_data/single_booking', $param_lst_fieldno)), true);
// print_r($get_single_data);die;
		$this->templates->assign('get_single_data',$get_single_data);
		$this->templates->assign('get_field_no',$get_field_no);
		$this->layout('edit', '');
	}

	public function print_booking()
	{
		$param_lst_fieldno = array('data' => $this->input->get('trx_no'), 'table' => 'TRX_FIELDBOOKING', 'company_code' => $this->s_company_code);

		$get_single_data = json_decode(($this->curl->simple_get($this->API.'Booking_data/single_booking', $param_lst_fieldno)), true);
		$get_company_data = json_decode(($this->curl->simple_get($this->API.'Global_Api/data_company', $param_lst_fieldno)), true);

		$this->templates->assign('get_company_data',$get_company_data);
		$this->templates->assign('get_single_data',$get_single_data);
		$this->templates->assign('admin',$this->s_user_name);
		$this->layout_empty('print', '');
	}

}