<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_emprende extends CI_Controller
{
        function __construct(){
         
            parent::__construct();
            $this->load->Model('m_emprende');
           // $this->load->Model('m_usuario');    
        }
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');  
        $this->load->view('layout/footer');
        $listar = $this->m_emprende->listar_emprende();
        $this->load->view('v_emprende', compact('listar'));
    } 
}
?>