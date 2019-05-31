    <page_header>
    <br />
    <table align="center" width="100%" height="5%">
  <tr>
    <td > 
         <img src="./res/logo_sucre.jpg" alt="" style="border: none;" width="76" height="85" />
    </td>
    <td align="center">REPÚBLICA BOLIVARIANA DE VENEZUELA <br />
   MINISTERIO DEL PODER POPULAR PARA LA EDUCACION UNIVERSITARIA<br />
   <strong> UNIVERSIDAD POLITÉCNICA TERRITORIAL DEL ESTADO ARAGUA <br />
   “FEDERICO BRITO FIGUEROA”<br /> </strong>
   LA VICTORIA- ESTADO ARAGUA
   </td>
   <td>
       <img src="./res/logo_sucre.jpg" alt="" style="border: none;" width="76" height="85" /> 
   
   </td>
  </tr>

</table>
</page_header>
<table  align="center" style="margin-top:120px; ">
  <tr>
    <td> <strong> INSCRIPCIÓN DE PROYECTO SOCIOTECNOLÓGICO </strong> 
</td>
  </tr>
</table>

<table align="center" border="1"  width="600" >
<tr>
<td colspan="2">Código del Proyecto: <?php echo $id;?></td>
<td colspan="2"> Trayecto: <?php echo $fila['trayecto']; ?>  </td>

</tr>

<tr>
<td  colspan="4">
<strong>Titulo del Proyecto:</strong>  <br /> <?php echo $fila['titulo']; ?>
</td>
</tr>

<tr>
<td  colspan="4">
<strong>Nombre de la Comunidad </strong>  <br /> <?php echo 
$fila['comunidad']
; ?>
</td>
</tr>
<!--<tr>
<td width="150">Estado </td>
<td width="200" colspan="2">Municipio </td>
<td  width="250"colspan="2"> ciudad </td>
</tr>-->


<tr align="center">
<strong>
<td width="160">
Integrantes del proyecto
</td>
<td width="85">
Cedula
</td>
<td width="118">
Telefono
</td>
<td width="70">
e-mail
</td>

</strong>
</tr>
<?php
	while($fila2 = mysql_fetch_array($res2)){
?>

<tr width="600" align="center">
  <td><?php echo $fila2['nombres']; ?> <?php echo $fila2['apellidos']; ?>  </td>
  <td><?php echo $fila2['cedula']; ?></td>
    <td> <?php echo $fila2['telefono']; ?></td>
    <td><?php echo $fila2['correo']; ?></td>
  
</tr>
<?php
	}
?>
<tr>
<td   colspan="4">
<strong>Coordinador: </strong> <?php echo $fila['cooordinadorN']; ?>  <?php echo $fila['coordinadorA'] ; ?>

</td>
</tr>
<tr>
<td  colspan="2"> <strong>Telefono: </strong> <?php echo $fila['coordinador_telefono']; ?></td>
<td colspan="2"> <strong>e-mail:</strong> <?php echo $fila['coordinador_correo']; ?> </td>

</tr>

<tr>


<td  colspan="4">
 <strong>Tutor: </strong> <?php echo $fila['tutorN']; ?>  <?php echo $fila['tutorA'] ; ?>
</td>
</tr>
<tr>
<td  colspan="2"> <strong>Telefono:</strong> <?php echo $fila['tutor_telefono']; ?></td>
<td colspan="2"> <strong> e-mail: </strong> <?php echo $fila['tutor_correo']; ?> </td>

</tr>
<tr>
<td  colspan="4">
<strong>Diagnóstico (¿Qué se observa en la comunidad (problemas, necesidades, intereses)? </strong> 
<br /> <?php echo $fila['diagnostico']; ?>
</td>
</tr>
<tr>
<td  colspan="4">
 <strong>Breve descripción del proyecto  </strong> <br />
 <?php echo $fila['descripcion']; ?> 
 
</td>
</tr>
<tr>
<td  colspan="4">
<strong>Aporte a la comunidad (¿Cómo el proyecto va a mejorar la situación definida?)</strong> <br />
<?php echo $fila['aportes']; ?>
</td>
</tr>
</table>
