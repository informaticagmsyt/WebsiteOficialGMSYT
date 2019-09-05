<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pricipal extends CI_Controller
{
        function __construct(){
         
            parent::__construct();
            //$this->load->Model('m_agro');
           // $this->load->Model('m_usuario');    
        }
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');  
        $this->load->view('layout/footer');
      //  $listar = $this->m_agro->listar_agro();, compact('listar')
        $this->load->view('v_principal');
    } 
}
?>