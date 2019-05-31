<?php

	$conexion = pg_connect("host=localhost dbname=sistema user=postgres password=123456") or die ('No se ha podido conectar: ' . pg_last_error());
	//$id_municipio = $_POST['id_municipio'];
	//$id_estado = $_POST['4'];
	
	$sql = "SELECT id_parroquia, parroquia FROM parroquias WHERE id_municipio = '5' ORDER BY parroquia";
	$q=pg_query($conexion,$sql);	
	while($row = pg_fetch_assoc($q))
	{
		$html.= "<option value='".$row['id_parroquia']."'>".$row['parroquia']."</option>";
	}
	echo $html;
?>
