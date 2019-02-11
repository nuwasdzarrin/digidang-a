<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller {

	public function index()
	{
		$id = $this->uri->segment(2);
		echo $id;
		/*$this->load->view('front/v_detail');*/
	}
}
