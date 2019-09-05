<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_siembra_caracas extends CI_Controller
{
        function __construct(){
            parent::__construct();
            $this->load->Model('m_siembra_caracas');
           // $this->load->Model('m_usuario');    
        }
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');  
        $this->load->view('layout/footer');
        $listar = $this->m_siembra_caracas->listar_siembra();
        $this->load->view('v_listado_siembra_caracas', compact('listar'));
    } 
}
?>