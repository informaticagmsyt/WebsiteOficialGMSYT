<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_ingenio extends CI_Controller
{
        function __construct(){
         
            parent::__construct();
            $this->load->Model('m_ingenio');
           // $this->load->Model('m_usuario');    
        }
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');  
        $this->load->view('layout/footer');
        $listar = $this->m_ingenio->listar_ingenio();
        $this->load->view('v_ingenio', compact('listar'));
    } 
}
?>