<?php
class m_asesorate  extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }   /*
 public function contar_proyectos(){
    $this->db->query("SELECT COUNT(*)");
    $this->db->from('proyecto');
    $this->db->where('estatus_proyecto','Paralizado');
    $paralizado = $this->db->get();
    return $paralizado->result();
}
*/

public function listar_asesorate(){
$this->db->select(" asesorate.id_brigadas, 
  asesorate.cedula, 
  asesorate.nombre, 
  asesorate.apellido, 
  asesorate.telefono, 
  asesorate.email, 
  asesorate.t_emprendimiento, 
  asesorate.estado, 
  asesorate.sexo, 
  asesorate.f_nacimiento, 
  asesorate.municipio, 
  asesorate.parroquia,
  asesorate.s_ubicacion, 
  asesorate.localidad, 
  asesorate.n_localidad, 
  asesorate.e_social, 
  asesorate.n_social,  
  asesorate.movimiento, 
  asesorate.t_asesoramiento, 
  asesorate.lusolicitud, 
  asesorate.pertenece, 
  asesorate.fecha, 
  estados.estado, 
  parroquias.parroquia, 
  municipios.municipio");
  $this->db->from('public.asesorate, 
  public.estados, 
  public.municipios, 
  public.parroquias');
  $this->db->where( "asesorate.estado = estados.id_estado AND
  asesorate.municipio = municipios.id_municipio AND
  asesorate.parroquia = parroquias.id_parroquia");
  $listado = $this->db->get();
    return $listado->result();

}
}
?>
