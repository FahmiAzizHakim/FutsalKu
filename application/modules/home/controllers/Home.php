<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('user_id') == ''){
			redirect('Login','refresh');
		}

	}

	public function index()
	{	
		if ($this->input->get('date') == null) {
			$date_param =  date("d/m/Y");
			$date_picker =  date("Y-m-d");
		}
		else
		{
			$date = $this->input->get('date');
			$date_param =  date("d/m/Y", strtotime($date));
			$date_picker =  $date;
		}
			//Default field time
			$param = array('company_code' => 'RDCNT');
			$time_default = json_decode(($this->curl->simple_get($this->API.'Global_Api/data_timebooking', $param)), true);
			print_r($time_default);die;
			//lapangan 1
			$param1 = array('trx_date' => $date_param ,'trx_field_no' => '1');
			$time_booking1 = json_decode(($this->curl->simple_get($this->API.'Dashboard/data_timebooking', $param1)), true);
			if ($time_booking1 == null) {$time_booking1 = '1';}
			//lapangan 2
			$param2 = array('trx_date' => $date_param ,'trx_field_no' => '2');
			$time_booking2 = json_decode(($this->curl->simple_get($this->API.'Dashboard/data_timebooking', $param2)), true);
			if ($time_booking2 == null) {$time_booking2 = '2';}
			//lapangan 3
			$param3 = array('trx_date' => $date_param,'trx_field_no' => '3');
			$time_booking3 = json_decode(($this->curl->simple_get($this->API.'Dashboard/data_timebooking', $param3)), true);
			if ($time_booking3 == null) {$time_booking3 = '3';}
			//lapangan 4
			$param4 = array('trx_date' => $date_param,'trx_field_no' => '4');
			$time_booking4 = json_decode(($this->curl->simple_get($this->API.'Dashboard/data_timebooking', $param4)), true);
			if ($time_booking4 == null) {$time_booking4 = '4';}
		$this->templates->assign( 'time_default', $time_default);
		$this->templates->assign( 'time_booking1', $time_booking1);
		$this->templates->assign( 'time_booking2', $time_booking2);
		$this->templates->assign( 'time_booking3', $time_booking3);
		$this->templates->assign( 'time_booking4', $time_booking4);
		$this->templates->assign( 'date', $date_picker);
    	$this->layout('home', '');
	}
	public function daftar()
	{
    	$this->layout('form', '');
	}

	public function entri_agen()
	{
		$data = $this->m_master->getListData('m_agen_tbl')->result_array();
		// print_r($data);die();
    	$title = 'Entri Agen Baru';
    	$this->templates->assign( 'data', $data);
    	$this->layout('agen_entri', $title);
	}

	public function edit_agen()
	{	
		$param = $this->input->post('agen_id');
		$agen = $this->m_master->get($param, 'agen_id', 'm_agen_tbl')->row_array();
		// print_r($agen);die();
		$data = $this->m_master->getListData('m_agen_tbl')->result_array();
		// print_r($data);die();
    	$title = 'Entri Agen Baru';
    	$this->templates->assign( 'data', $data);
    	$this->templates->assign( 'agen', $agen);
    	$this->layout('agen_edit', $title);
	}

	public function save()
	{	
		$data = $this->input->post();
		$seq =  $this->m_master->getSequence();

		if($data['action'] == 'create'){
			$data['agen_id'] = substr($data['agen_join_date'], 2,2) . substr($data['agen_join_date'], 5,2) . str_pad($seq['id_seq']+1,4,"0",STR_PAD_LEFT);
			unset($data['action']);
			$save = $this->m_master->save('m_agen_tbl', $data);
		}else{
			unset($data['action']);
			$save = $this->m_master->update('agen_id', $data['agen_id'], $data, 'm_agen_tbl');
		}
		redirect('homepage/index','refresh');
	}

	public function test_petunjuk()
	{
		$kodetest = $this->uri->segment(3);
    	$title0 = 'Ikuti Psikotest';
		$title = 'Petunjuk Test &minus; '.$kodetest;
		$breadcrumbs[0] = array('url'=>'{$base_url}assessment/psikotest', 'text'=>$title0);
		$breadcrumbs[1] = array('url'=>'{$base_url}assessment/test_petunjuk/'.$kodetest, 'text'=>$title);
		$this->templates->assign("kodetest", $kodetest);
		$this->layout('petunjuk', $title, $breadcrumbs);
	}

	public function mulai_test()
	{
		$kodetest = $this->uri->segment(3);
    	$title0 = 'Ikuti Psikotest';
    	$title = 'Ikuti Psikotest &minus; '.$kodetest;
		$breadcrumbs[0] = array('url'=>'{$base_url}assessment/psikotest', 'text'=>$title0);
		$breadcrumbs[1] = array('url'=>'{$base_url}assessment/test_petunjuk/'.$kodetest, 'text'=>'Petunjuk Test &minus; '. $kodetest);
		$breadcrumbs[2] = array('url'=>'{$base_url}assessment/mulai_test/'.$kodetest, 'text'=>$title);
		$this->templates->assign("kodetest", $kodetest);
		$this->layout('test', $title, $breadcrumbs);
	}

	public function hasil()
	{
		$d['page'] = 'assess_hasil';
    	$d['title'] = 'Lihat Hasil';
    	$d['breadcrumbs'] = array('<li><a href="<?php echo base_url(\'assessment/hasil\');?>">'.$d['title'].'</a></li>');
    	$this->load->view('layout_member', $d);
	}

	public function getJson(){
		$param = $this->input->post('agen_id');
		$agen = $this->m_master->get($param, 'agen_id', 'm_agen_tbl')->row_array();

		echo json_encode($agen);
	}

	public function cekWebName(){
		$param = $this->input->post('agen_initial_name');
		$agen = $this->m_master->get($param, 'agen_initial_name', 'm_agen_tbl')->row_array();
		print_r($agen);

		echo json_encode($agen);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */