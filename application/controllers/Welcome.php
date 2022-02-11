<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$fas = $this->db->get('F_Hotel')->result();
		$this->load->view('master/fasilitas',['fas'=>$fas]);
	}
}
