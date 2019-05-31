<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->library('encryption'); 
	}

	public function index()
	{
		if ($this->session->userdata("login")) {
			redirect(base_url('index.php/c_login'));
		}
		$this->load->view('layout/header');
		$this->load->view('v_login');
		$this->load->view('layout/footer');	
	}
	public function ingresar(){

		$usuario= $this->input->post('nombre_usuario');
		$password= $this->input->post('contraseña'); 
		$q = $this->m_login->ingresar($usuario,$password);
		if ($q > 0) {
			$data = array(
				'id_usuario' => $q->id_usuario,
				'usuario' => $q->nombre_usuario,
				'password' => $q->password,
				'nivel_usuario' => $q->nivel_usuario,
				'login'=> TRUE
			);
			$this->session->set_userdata($data);
			redirect(base_url('index.php/C_principal'));
		}else{
			redirect(base_url());
		}
	}
	public function salir(){
		$q =$this->session->sess_destroy();
	
			redirect(base_url());
		
	}
	
}
