<?php
	$dbconn = pg_connect("host=localhost dbname=sistema user=postgres password=123456")
    or die('No se ha podido conectar: ' . pg_last_error());
	
?>
