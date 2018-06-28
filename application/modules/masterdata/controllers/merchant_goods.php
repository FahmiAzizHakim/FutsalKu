<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Merchant_Goods extends MY_Controller {

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


		$data = json_decode(($this->curl->simple_get($this->API.'Master_data/data_goods', $param)), true);
		$this->templates->assign( 'data_barang', $data);
    	$this->layout('merchant_goods/lists', '');
	}

	public function add()
	{
		$param_goodstype = array('code_category' => 'GDT');
		$goods_type = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_goodstype)), true);

		$this->templates->assign( 'goods_type', $goods_type);
		$this->layout('merchant_goods/add', '');
	}


	public function edit()
	{
		$param = array('company_code' => $this->s_company_code,
									'id' => $this->input->get('store_goods_id'));
		$goodsdata = json_decode(($this->curl->simple_get($this->API.'Master_data/single_goods', $param)), true);
		$param_goodstype = array('code_category' => 'GDT');

		$goods_type = json_decode(($this->curl->simple_get($this->API.'Master_data/code_bycategory', $param_goodstype)), true);
		$this->templates->assign( 'goods_type', $goods_type);
		$this->templates->assign( 'goodsdata', $goodsdata);
		$this->layout('merchant_goods/edit', '');
	}
}