<?php
class m_agro extends CI_Model
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
public function listar_agro(){
$this->db->select(" estados.estado, 
  parroquias.parroquia, 
  municipios.municipio, 
  agroproductivo.id_agroproductivo, 
  agroproductivo.cedula, 
  agroproductivo.nombre, 
  agroproductivo.apellido, 
  agroproductivo.sexo, 
  agroproductivo.f_nacimiento,
  agroproductivo.telefono, 
  agroproductivo.email, 
  agroproductivo.t_emprendimiento, 
  agroproductivo.movimiento, 
  agroproductivo.t_asesoramiento,
  agroproductivo.s_ubicacion, 
  agroproductivo.localidad, 
  agroproductivo.n_localidad, 
  agroproductivo.e_social, 
  agroproductivo.n_social,
  agroproductivo.pertenece,
  agroproductivo.fecha, 
  agroproductivo.solicitud");
  $this->db->from('public.estados, 
  public.municipios, 
  public.parroquias, 
  public.agroproductivo');
  $this->db->where( "agroproductivo.estado = estados.id_estado AND
  agroproductivo.municipio = municipios.id_municipio AND
  agroproductivo.parroquia = parroquias.id_parroquia");
  $listado = $this->db->get();
    return $listado->result();

}
}
?>
