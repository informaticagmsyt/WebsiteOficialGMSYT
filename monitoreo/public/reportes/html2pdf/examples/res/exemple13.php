<?php	
	$dbname = "evento";
    //nombre servidor
    $host = "localhost";
    //nombre usuarios base de datos
    $user = "postgres";
    //password usuario
    $pass = 'qwerty';
    //puerto postgreSql
    $port = 5432;

 
            $dbh = new PDO("pgsql:host=$host;port=$port;dbname=$dbname;user=$user;password=$pass");
            $dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

            $sql='SELECT * FROM visitantes ORDER BY nombre ASC ';
            

            $persona=$dbh->prepare($sql);
            $persona->execute();

            $reg = $persona->fetchAll();
            
?>

<?php 




?>
<table>
    <tr>
        <td><img src="res/cin.jpg" width="745" > </td>
    </tr>
</table>
  

<table> 
<tr> 
    <td ALIGN=center width="742" style="background-color:#DA2626; color:white;"> <b>LISTADO DE ASISTENTES</b></td>
</tr>
</table>

<table border="1">
	<tr>
		<td width="118">Cedula</td>
		<td width="138">Nombre</td>
		<td width="138">Apellido</td>
		<td width="191">Correo</td>
		<td width="108">Estado</td>	
	</tr>
	<?php
		foreach ($reg as $regist){
	?>
	<tr>
		<td>
		<?=$regist["cedula"]?>
		</td>	
		<td>
		<?=$regist["nombre"]?> <?=$regist["nombre_2"]?>
		</td>
		<td>
		<?=$regist["apellido"]?> <?=$regist["apellido_2"]?>
		</td>
		<td>
		<?=$regist["correo"]?>
		</td>
		<td>
		<?=$regist["estado"]?>
		</td>
	</tr>
	<?php
	}
	?>
</table>
  