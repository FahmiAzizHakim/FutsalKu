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
		$fin_no = 'PAYMENT'.'-'.$last_no;

		/*$param_trx = array('trx_no' => $this->post("trx_no"));*/
		$param_trx = array('param_no' => $this->input->post("param_no"),'user_name' => $this->input->post("user_name"),'fin_no' => $fin_no);

		
		$insert_data = json_decode(($this->curl->simple_post($this->API.'Pembayaran_data/insert_data', $param_trx)), true);
		return $insert_data;
    }

}
?>