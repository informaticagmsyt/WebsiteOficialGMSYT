<?php
	
	$conexion = pg_connect("host=localhost dbname=sistema user=postgres password=123456") or die ('No se ha podido conectar: ' . pg_last_error());
	
	$id_estado = $_POST['estado'];
	
	$sql = "SELECT id_municipio, municipio FROM municipios WHERE id_estado = '4' ORDER BY municipio";
	$q=pg_query($conexion,$sql);
		
	
	$html= "<option value='0'>Seleccionar Municipio</option>";
	
	while( $rowM = pg_fetch_assoc($q))
	{
		 $html.= "<option value='".$rowM['id_municipio']."'>".$rowM['municipio']."</option>";		
	}
	echo $html;
?>		
