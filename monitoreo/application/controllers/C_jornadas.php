<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_jornadas extends CI_Controller
{
        function __construct(){
         
            parent::__construct();
            $this->load->Model('m_jornadas');
           // $this->load->Model('m_usuario');    
        }
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');  
        $this->load->view('layout/footer');
        $listar = $this->m_jornadas->listar_jornadas();
        $this->load->view('v_jornadas', compact('listar'));
    } 
}
?>