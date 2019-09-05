<?php
class m_login extends CI_Model
{
    function _construct(){
        parent::__construct(); 
        $this->load->library('encryption');
    }

    public function ingresar($usu,$pass){
        
        // $this->db->select("id_usuario,usuario,password");
       // $this->db->from('usuarios');
        $this->db->where("usuario ='$usu'");
        $this->db->where("password ='$pass'");
        $resp = $this->db->get('usuarios');
        // $q =$resp->num_rows();
        if ($resp->num_rows() >0) {
            return $resp->num_rows();
        return $resp->result();   
        }else {
          return false;  
        }
       
    }

    
}
?>