
<?php
$var=$_GET['del'];
$enlace = pg_connect("host='localhost' dbname=sistema port=5432 user=postgres password=123456");
$sql=" SELECT 
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
  estados.estado, 
  municipios.municipio, 
  municipios.id_municipio, 
  estados.id_estado, 
  parroquias.parroquia, 
  parroquias.id_parroquia, 
  infraestructura.id_infraestructura, 
  infraestructura.obs_infraestructura, 
  infraestructura.condicion_bano, 
  infraestructura.id_proyecto_infra, 
  infraestructura.edificacion, 
  infraestructura.m2_terreno, 
  infraestructura.m2_construccion, 
  servicios.id_servicios, 
  servicios.id_proyecto_serv, 
  servicios.aguas_blancas, 
  servicios.aguas_servidas, 
  servicios.servicio_gas, 
  servicios.serv_electrico, 
  servicios.vialidad, 
  servicios.aceo_urbano, 
  operatividad.id_operatividad, 
  operatividad.fnto_operativo, 
  operatividad.obsv_operativas, 
  operatividad.id_proyecto_opera, 
  operatividad.unid_medida, 
  operatividad.produccion_inst, 
  operatividad.produccion_act
FROM 
  public.proyecto, 
  public.empresa, 
  public.estados, 
  public.municipios, 
  public.parroquias, 
  public.infraestructura, 
  public.servicios, 
  public.operatividad
WHERE 
  proyecto.id_proyecto = empresa.id_proyecto_empresa AND
  proyecto.id_proyecto = infraestructura.id_proyecto_infra AND
  proyecto.id_proyecto = servicios.id_proyecto_serv AND
  proyecto.id_proyecto = operatividad.id_proyecto_opera AND
  empresa.estado = estados.id_estado AND
  empresa.municipio = municipios.id_municipio AND
  empresa.parroquia = parroquias.id_parroquia AND proyecto.id_proyecto = '$var' limit 1";

$query= pg_query($enlace,$sql);
$fila = pg_fetch_array($query);

$sql1="SELECT 
  observaciones.fecha_ejecucion, 
  observaciones.recomendaciones, 
  observaciones.observaciones, 
  observaciones.id_tareas_obs, 
  tareas.id_tarea, 
  observaciones.id_observaciones
FROM 
  public.observaciones, 
  public.tareas
WHERE 
  tareas.id_tarea = observaciones.id_tareas_obs AND tareas.id_tarea = '$var'";
$query1= pg_query($enlace,$sql1);

?>
<table>
    <tr>
        <td><img src="res/cin.jpg" width="740" > </td>
    </tr>
</table>
 <br>
<style type="text/css">
	.linea{
		border-style: solid;
		border-width: 1px;

		color: #DC3545;
		/*color: #007BFF;*/ 	
	}
</style> 

<table>
    <tr>
        <td><b>Estatus General:</b></td>
        <td></td>
    </tr>
</table>
<br>
<!--*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
<table> 
<tr>
    <td width="735"; style="  background-color: #8E1900;"> <b style="color: white;" >DATOS DEL PROYECTO</b></td>
</tr>
</table>
<table style="bordercolor="black"">
        <tr>
            <td ><b>Nombre del Proyecto:</b></td>
            <td><?php echo $fila["nombre_proyecto"]?></td> 
        </tr>
        <tr>
            <td ><b>Descripcion del Proyecto:</b></td>
            <td width="568" align="justify" >  <?php echo $fila["descripcion_proyecto"]?> </td>  
        </tr>
        <tr>
            <td><b>Situacion Actual:</b></td>
            <td ><?php echo $fila["estatus_proyecto"]?></td>
        </tr>
         <tr>
            <td ><b>Tipo de Proyecto:</b></td>
            <td >  <?php echo $fila["tipo_proyecto"]?> </td>  
        </tr>
         <tr>
            <td><b>Categoria del Proyecto:</b></td>
            <td ><?php echo $fila["categoria_proyecto"]?></td>
        </tr>  
             
</table>
<br>
<!--*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/*/-->
<table> 
<tr>
    <td width="735" style="  background-color: #8E1900;"> <b style="color: white;" >DATOS DE LA UNIDAD DE PRODUCCIÓN</b></td>
</tr>
</table>
<table >
				<tr>
            <td ><b>Esta Registrada:</b></td>
            <td ><?php echo $fila["registrada"]?></td>  
           </tr>
			<tr>
            <td ><b>Rif:</b></td>
            <td><?php echo $fila["tipo"]."-".$fila["rif_empresa"]?></td> 
        </tr>
        <tr>
            <td ><b>Nombre:</b></td>
            <td><?php echo $fila["nombre_empresa"]?></td> </tr>
        <tr>
            <td ><b>Telefono:</b></td>
            <td ><?php echo $fila["telefono_empresa"]?></td>  
        </tr>   
			<tr>
            <td ><b>Direccion:</b></td> 
            <td width="735"><?php echo $fila["direccion_empresa"]?></td> 
         </tr>
         <tr>
         	<td><b>Estado:</b></td>
         	<td><?php echo $fila["estado"]?></td>
         </tr>
         <tr>
         	<td><b>Municipio:</b></td>
				<td><?php echo $fila["municipio"]?></td>
         </tr>
         <tr>
         	<td><b>Parroquia:</b></td>
				<td><?php echo $fila["parroquia"]?></td>
         </tr>
           
 		  <tr>
            <td ><b>Codigo Situr:</b></td>
            <td ><?php echo $fila["codigo_situr"]?></td>  
        </tr>
         <tr>
            <td ><b>Codigo Sunagro:</b></td>
            <td ><?php echo $fila["codigo_sunagro"]?></td>  
        </tr>
         <tr>
            <td ><b>Institucion Responsable:</b></td>
            <td ><?php echo $fila["inst_responsable"]?></td>  
        </tr>

         
       	
</table>
<br>

<table> 
<tr>
    <td width="735" style="  background-color: #8E1900;" > <b style="color: white;" >DATOS DE INFRAESTRUCTURA y EDIFICACIÓN </b></td>
</tr>
</table>


<table style="bordercolor="black"">
 		  <tr>
            <td ><b>Area del Terreno:</b></td>
            <td><?php echo $fila["m2_terreno"]." ".'M2'?></td> 
        </tr>

			<tr>
            <td ><b>Edificacion:</b></td>
            <td><?php echo $fila["edificacion"]?></td> 
        </tr>
 <tr>
            <td ><b>Area del Terreno:</b></td>
            <td><?php echo $fila["m2_construccion"]." ".'M2'?></td> 
        </tr>
        <tr>
            <td ><b>Instalaciones Sanitarias:</b></td>
            <td><?php echo $fila["condicion_bano"]?></td> 
        </tr>
        <tr>
            <td ><b>Observaciones:</b></td>
            <td width="735" ><?php echo $fila["obs_infraestructura"]?></td>  
        </tr>

</table>

<br>

<table> 
<tr>
    <td width="735" style="  background-color: #8E1900;" > <b style="color: white;" >SERVICIOS PÚBLICOS </b></td>
</tr>
</table>
<!--********************************************************************************************************-->

<table style="bordercolor="black"">
			<tr>
            <td ><b>Aguas Blancas:</b></td>
            <td><?php echo $fila["aguas_blancas"]?></td> 
        </tr>
        <tr>
            <td ><b>Aguas Servidas:</b></td>
            <td><?php echo $fila["aguas_servidas"]?></td> 
        </tr>
        <tr>
            <td ><b>Servicio de Gas:</b></td>
            <td ><?php echo $fila["servicio_gas"]?></td>  
        </tr>
		  <tr>
            <td ><b>Servicio Electrico:</b></td>
            <td><?php echo $fila["aguas_blancas"]?></td> 
        </tr>
        <tr>
            <td ><b>Vialidad:</b></td>
            <td><?php echo $fila["vialidad"]?></td> 
        </tr>
        <tr>
            <td ><b>Aseo Urbano:</b></td>
            <td ><?php echo $fila["aceo_urbano"]?></td>  
        </tr>   
 
</table>
<br>
<table>
<tr>
    <td width="735" style="  background-color: #8E1900;" > <b style="color: white;" >OPERATIVIDAD </b></td>
</tr>
</table>
<table style="bordercolor="black"">
			<tr> 
            <td ><b>Funcionamiento:</b></td>
            <td><?php echo $fila["fnto_operativo"]?></td> 
        </tr>

	<tr>
            <td ><b>Capacidad de Produccion:</b></td>
            <td><?php echo $fila["produccion_inst"]." ".$fila["unid_medida"]?></td> 
        </tr>
        <tr>
            <td ><b>Capacidad de Produccion <small> (Actual) </small>:</b></td>
            <td  width="735"><?php echo $fila["produccion_act"]." ".$fila["unid_medida"]?></td> 
        </tr>
               <tr>
            <td ><b>Observaciones:</b></td>
            <td  width="735"><?php echo $fila["obsv_operativas"]?></td> 
        </tr>
</table>