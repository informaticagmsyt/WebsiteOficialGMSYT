<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<body>
<br>

<section>
    <div  class="container-fluid">
    <p><h4 style="bg-success" class="text-primary"> Listado de personas Registadas en las Brigadas Electromagneticas</h4></p>
    </div>
    </section>
    <hr style="   border-width: 3px; dorder:solid;" class="bg-danger">
<div class="container-fluid">
	<div class=" col-md-12">
			  <table id="tabla"  class=" table table-striped table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">Cedula</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Edad</th>
                        <th scope="col">Fecha de Nacimiento</th>
                        <th scope="col">Telefonos</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Municipio</th>
                        <th scope="col">Parroquia</th>
                        <th scope="col">Sector de Ubicacion</th>
                        <th scope="col">Localidad</th>
                        <th scope="col">Espacio Social</th>
                        <th scope="col">Movimiento</th>
                        <th scope="col">Tipo de Brigada</th>
                        <th scope="col">Email</th>   
                        <th scope="col">Pertenece a</th>
                        <th scope="col">Fecha de Registro</th>     
                    </tr>
                </thead>
                <tbody>
        <?php
	 	foreach ($listar as $listar) {
	 ?>
	  <tr>
            <th scope="row"><?php echo $listar->cedula;?></th>
            <td><?php echo strtolower($listar->nombre);?></td>
            <td><?php echo strtolower($listar->apellido);?></td>
             <td><?php  $cumpleanos = new DateTime("$listar->f_nacimiento");$hoy = new DateTime();$annos = $hoy->diff($cumpleanos);echo $annos->y;?></td>
            <td><?php echo strtolower($listar->f_nacimiento);?></td>
           
            <td><?php echo strtolower($listar->telefono);echo "-";echo $listar->celular;?></td>
            <td><?php echo strtolower($listar->estado);?></td>
            <td><?php echo strtolower($listar->parroquia);?></td>
            <td><?php echo strtolower($listar->parroquia);?></td>
            <td><?php echo strtolower ($listar->s_ubicacion);?></td>
            <td><?php echo strtolower ($listar->localidad);echo " ";echo strtolower($listar->n_localidad);?></td>
            <td><?php echo strtolower ($listar->e_social);echo " ";echo strtolower($listar->n_social);?></td>
            <td><?php echo strtolower($listar->movimiento);?></td>
            <td><?php echo strtolower($listar->t_brigada);?></td>
            <td><?php echo strtolower($listar->email);?></td> 
            <td><?php echo strtolower($listar->pertenece);?></td>
            <td><?php echo strtolower($listar->fecha);?></td>  
    </tr>
	<?php
	}
	?>       
        </tbody>


</body>