<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_asesorate extends CI_Controller
{
        function __construct(){
         
            parent::__construct();
            $this->load->Model('m_asesorate');
           // $this->load->Model('m_usuario');    
        }
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');  
        $this->load->view('layout/footer');
        $listar = $this->m_asesorate->listar_asesorate();
        $this->load->view('v_asesorate', compact('listar'));
    } 
}
?>