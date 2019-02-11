<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_product extends CI_Model{

	var $tabel = 'produk'; 

	public function getAll() {
		
		return $this->db->get($this->tabel)->result();
	}

	public function getOne ($id)
	{
		return $this->db->get_where($this->tabel, array('id_produk' => $id))->row();
	}
	
}