<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_captacion extends CI_Controller
{
        function __construct(){
         
            parent::__construct();
            $this->load->Model('m_captacion');   
        }
    public function index(){
        $this->load->view('layout/header');
        $this->load->view('layout/navbar');  
        $this->load->view('layout/footer');
        $listar = $this->m_captacion->listar_captacion();
        $this->load->view('v_captacion', compact('listar'));
    } 
}
?>