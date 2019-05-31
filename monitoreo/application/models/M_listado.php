<?php
class m_listado extends CI_Model
{
    function _construct(){
        parent::__construct();  
    }   
public function listar_proyecto(){
   
    $this->db->select("proyecto.id_proyecto, 
	proyecto.nombre_proyecto, 
	proyecto.estatus_proyecto, 
	proyecto.descripcion_proyecto, 
	proyecto.tipo_proyecto, 
	proyecto.categoria_proyecto, 
	empresa.id_empresa, 
	empresa.tipo, 
	empresa.rif_empresa, 
	empresa.nombre_empresa, 
	empresa.telefono_empresa, 
	empresa.direccion_empresa, 
	empresa.estado, 
	empresa.municipio, 
	empresa.parroquia, 
	empresa.ciudad, 
	empresa.registrada, 
	empresa.codigo_situr, 
	empresa.codigo_sunagro, 
	empresa.inst_responsable, 
	empresa.id_proyecto_empresa, 
	empresa.f_creacion, 
	estados.id_estado, 
	estados.estado, 
	municipios.id_municipio, 
	municipios.id_estado, 
	municipios.municipio, 
	parroquias.id_parroquia, 
	parroquias.id_municipio");
    $this->db->from("
		public.empresa, 
  		public.proyecto, 
  		public.estados, 
  		public.municipios, 
  		public.parroquias"
	);
    $this->db->where(" proyecto.id_proyecto = empresa.id_proyecto_empresa AND
			estados.id_estado = empresa.estado AND
			municipios.id_municipio = empresa.municipio AND
			parroquias.id_parroquia = empresa.parroquia ");
    $resultados = $this->db->get();
    return $resultados->result();
        
 }
public function p_tutor(){
    $this->db->select(' "proyecto-tutor".id_proyecto_tutor, 
    "proyecto-tutor".id_proyect, 
    "proyecto-tutor".id_tutorr, 
    proyecto.nombre_proyecto, 
    proyecto.estatus_proyecto, 
    responsable.nacionalidad, 
    responsable.cedula_responsable, 
    responsable.nombre_responsable, 
    responsable.telefono_responsable, 
    responsable.email_responsable, 
    proyecto.descripcion_proyecto, 
    proyecto.id_proyecto');
    $this->db->from('public."proyecto-tutor", public.proyecto, public.responsable');
    $this->db->where('proyecto-tutor".id_proyect = proyecto.id_proyecto AND
    "proyecto-tutor".id_tutorr = responsable.id_responsable');
    $resultados = $this->db->get();
    return $resultados->result();
}

public function tareas(){
    $this->db->select("proyecto.id_proyecto,proyecto.nombre_proyecto, 
    proyecto.estatus_proyecto, 
    responsable.nombre_responsable, 
    tareas.titulo_tarea, 
    tareas.tipo_tarea, 
    tareas.descripcion_tarea, 
    tareas.fi_tarea, 
    tareas.ff_tarea,
    tareas.id_tarea");
    $this->db->from('public.tareas, 
    public.responsable, 
    public.proyecto');
    $this->db->where("tareas.id_proyecto_tarea = proyecto.id_proyecto AND
    tareas.id_tutor_tarea = responsable.id_responsable");
    $resultados = $this->db->get();
    return $resultados->result();
} 
 public function contar_proyectos(){
    $this->db->query("SELECT COUNT(*)");
    $this->db->from('proyecto');
    $this->db->where('estatus_proyecto','Paralizado');
    $paralizado = $this->db->get();
    return $paralizado->result();
}
public function proyectos_activos(){
    $this->db->query("SELECT COUNT(*)");
    $this->db->from('proyecto');
    $this->db->where('estatus_proyecto','Activo');
    $activo = $this->db->get();
    return $activo->result();
}
public function proyectos_reacondicionamiento(){
    $this->db->query("SELECT COUNT(*)");
    $this->db->from('proyecto');
    $this->db->where('estatus_proyecto','Reacondicionamiento');
    $paralizado = $this->db->get();
    return $paralizado->result();
}
public function proyectos_planificacion(){
    $this->db->query("SELECT COUNT(*)");
    $this->db->from('proyecto');
    $this->db->where('estatus_proyecto','Planificacion');
    $paralizado = $this->db->get();
    return $paralizado->result();
}
public function listar_proyectos(){
	return  $this->db->query("SELECT * FROM proyecto")->result();
}

 public function listar_usuarios(){
        return  $this->db->query("SELECT * FROM usuarios")->result();
 }
 public function listar_responsable(){
  $this->db->select("responsable.id_responsable, 
  responsable.nacionalidad, 
  responsable.cedula_responsable, 
  responsable.nombre_responsable, 
  responsable.telefono_responsable, 
  responsable.email_responsable, 
  responsable.estado, 
  responsable.municipio, 
  responsable.parroquia, 
  responsable.direccion_responsable, 
  responsable.profesion, 
  responsable.oficio, 
  responsable.inst_pertenece, 
  estados.estado, 
  municipios.municipio, 
  parroquias.parroquia");
  $this->db->from('public.responsable, 
  public.estados, 
  public.municipios, 
  public.parroquias');
  $this->db->where("responsable.estado = estados.id_estado AND
  responsable.municipio = municipios.id_municipio AND
  responsable.parroquia = parroquias.id_parroquia");
  $listado = $this->db->get();
    return $listado->result();
}  
     public function get_municipio_query($id_estado){
        $query  =  $this->db->get_where('municipios', array('id_estado' =>$id_estado));
        return $query->result();
    }
    public function get_parroquia_query($id_municipio="4"){
        $query  =  $this->db->get_where('parroquias', array('id_municipio' => $id_municipio));
        return $query->result();
    }
}
?>
