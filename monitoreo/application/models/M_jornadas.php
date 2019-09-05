<?php
class m_jornadas  extends CI_Model
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

public function listar_jornadas(){
$this->db->select("  estados.estado, 
  parroquias.parroquia, 
  municipios.municipio, 
  asamblea.id_asamblea, 
  asamblea.cedula, 
  asamblea.nombre, 
  asamblea.apellido, 
  asamblea.telefono, 
  asamblea.celular, 
  asamblea.email, 
  asamblea.movimiento, 
  asamblea.espacio, 
  asamblea.luz, 
  asamblea.internet, 
  asamblea.agua");
  $this->db->from('public.estados, 
  public.municipios, 
  public.parroquias, 
  public.asamblea');
  $this->db->where( "asamblea.estado = estados.id_estado AND
  asamblea.municipio = municipios.id_municipio AND
  asamblea.parroquia = parroquias.id_parroquia");
  $listado = $this->db->get();
    return $listado->result();

}
}
?>
