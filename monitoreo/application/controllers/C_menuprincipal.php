<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_menuprincipal extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('v_menuprincipal');
		$this->load->view('layout/footer');
	}

}
