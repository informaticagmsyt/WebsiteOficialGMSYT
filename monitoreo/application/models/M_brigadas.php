<?php
class m_brigadas extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }   


public function listar_brigadas(){
	$this->db->select("   brigadas.id_brigadas, 
  brigadas.cedula, 
  brigadas.nombre, 
  brigadas.apellido, 
  brigadas.telefono, 
  brigadas.celular, 
  brigadas.email, 
  brigadas.sexo, 
  brigadas.f_nacimiento,
  brigadas.movimiento, 
  brigadas.t_brigada,
  brigadas.pertenece,
  brigadas.s_ubicacion, 
  brigadas.localidad,
  brigadas.n_localidad, 
  brigadas.e_social,
  brigadas.n_social,
  brigadas.fecha,  
  estados.estado, 
  municipios.municipio, 
  parroquias.parroquia");
  $this->db->from('public.estados, 
  public.municipios, 
  public.parroquias, 
  public.brigadas');
  $this->db->where("brigadas.estado = estados.id_estado AND
  brigadas.municipio = municipios.id_municipio AND
  brigadas.parroquia = parroquias.id_parroquia");

  $listado = $this->db->get();
    return $listado->result();
}

}
?>
