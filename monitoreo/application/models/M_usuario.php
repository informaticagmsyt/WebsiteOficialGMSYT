<?php
class M_usuario extends CI_Model
{
    function _construct(){
        parent::__construct(); 
        $this->load->library('encryption');
    }   
 
    public function guardar($param){
  
        $campos = array(
            'usuario' => $param['nombre_usuario'],  
            'password' => $param['contraseña'],
            'nivel_usuario'=> $param['nivel_usuario'],
            'estatus_usuario'=>$param['estatus_usuario']  
        );
        $insert= $this->db->insert('usuarios',$campos);
                if (!$insert) {
                    echo ' <script>  
                            alert("Erro al Registar Usuario");
                            document.location.href = "'.base_url().'"; 
                        </script>';
                } else {
                    echo ' <script>  
                            alert("Usuario Registrado con Exito");
                            document.location.href = "'.base_url('index.php/C_usuario').'"; 
                            </script>';
                }
     }
     public function get_usuario($id){
        $this->db->select("*");
        $this->db->from('usuarios');
        $this->db->where("id_usuario = '$id'");
        $resp = $this->db->get();
        return $resp->result();
     }
     public function editar_usuario($id,$campos){
        $this->db->where('id_usuario',$id);
        $sql= $this->db->update('usuarios',$campos);
           if ($sql) {
               echo '<script>  
                        alert("Usuario a sido editado con Exito");
                        document.location.href = "'.base_url('index.php/C_listado_usuario').'"; 
                    </script>';
           } 
        }
     
     
}
?>