<?php
class m_ingenio  extends CI_Model
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
    ,,,,,l
}
*/

public function listar_ingenio(){
$this->db->select("estados.estado, 
  parroquias.parroquia, 
  municipios.municipio, 
  ingenio.id_ingenio, 
  ingenio.cedula, 
  ingenio.nombre, 
  ingenio.apellido, 
  ingenio.telefono, 
  ingenio.s_ubicacion, 
  ingenio.localidad, 
  ingenio.n_localidad, 
  ingenio.e_social, 
  ingenio.n_social,
  ingenio.email, 
  ingenio.t_emprendimiento, 
  ingenio.movimiento, 
  ingenio.sexo, 
  ingenio.f_nacimiento,
  ingenio.t_proyecto, 
  ingenio.pertenece, 
  ingenio.fecha,
  ingenio.d_proyecto");
  $this->db->from('public.estados, 
  public.municipios, 
  public.parroquias, 
  public.ingenio');
  $this->db->where( "ingenio.estado = estados.id_estado AND
  ingenio.municipio = municipios.id_municipio AND
  ingenio.parroquia = parroquias.id_parroquia");
  $listado = $this->db->get();
    return $listado->result();

}
}
?>
