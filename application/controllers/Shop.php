<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_product');
	}

	public function index()
	{
		$data['allProduct'] = $this->m_product->getAll();
		$this->load->view('front/v_shop', $data);
	}

	public function detail()
	{
		$id = $this->uri->segment(3);
		$data['op'] = $this->m_product->getOne($id);
		$this->load->view('front/v_detail', $data);
	}

	public function checkout()
	{
		$data['dt'] = array('nama' => $this->input->post('name'),
                            'email' => $this->input->post('email'),
                            'phone' => $this->input->post('phone'));
		$this->load->view('front/v_checkout', $data);
	}
}
