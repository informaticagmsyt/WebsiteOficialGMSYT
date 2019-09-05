<?php
class m_emprende  extends CI_Model
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

public function listar_emprende(){
$this->db->select(" emprendimiento.id_emprendimiento, 
  emprendimiento.cedula, 
  emprendimiento.nombre, 
  emprendimiento.apellido, 
  emprendimiento.telefono, 
  emprendimiento.email, 
  emprendimiento.t_emprendimiento, 
  emprendimiento.estado, 
  emprendimiento.municipio, 
  emprendimiento.parroquia,
   emprendimiento.s_ubicacion, 
  emprendimiento.localidad, 
  emprendimiento.n_localidad, 
  emprendimiento.e_social, 
  emprendimiento.n_social, 
  emprendimiento.movimiento, 
  emprendimiento.t_asesoramiento, 
  emprendimiento.solicitud, 
  emprendimiento.pertenece, 
  emprendimiento.fecha,
  emprendimiento.sexo, 
  emprendimiento.f_nacimiento,  
  estados.estado, 
  municipios.municipio, 
  parroquias.parroquia");
  $this->db->from('public.emprendimiento, 
  public.estados, 
  public.municipios, 
  public.parroquias');
  $this->db->where( "emprendimiento.estado = estados.id_estado AND
  emprendimiento.municipio = municipios.id_municipio AND
  emprendimiento.parroquia = parroquias.id_parroquia");
  $listado = $this->db->get();
    return $listado->result();

}
}
?>
