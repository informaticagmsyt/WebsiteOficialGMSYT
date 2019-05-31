<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_usuario extends CI_Controller
{
        function __construct(){
            parent::__construct();
            $this->load->Model('m_usuario'); 
            $this->load->library('encryption'); 
        }

    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');
        $this->load->view('v_usuario');
        $this->load->view('layout/footer');
    }

    //Metodo de guarda los usuarios del sistema
	public function guardar(){
        $param['nombre_usuario']  = $this->input->post('nombre_usuario');
        $param['contraseña']      = $this->input->post('contraseña'); //$this->encryption->encrypt($this->input->post('contraseña'));
        $param['nivel_usuario']   = $this->input->post('nivel_usuario');
	    $param['estatus_usuario'] = $this->input->post('estatus_usuario');
       
        $this->m_usuario->guardar($param);
	}
}
?>