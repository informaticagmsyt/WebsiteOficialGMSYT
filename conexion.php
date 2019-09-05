<?php
	function conectar(){
		$enlace = pg_connect("host='localhost' dbname=gmsyt_final port=5432 user=postgres password=123456");
		return $enlace;
	}	
?>
