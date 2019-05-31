<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<body>
<br>

<section>
    <div  class="container-fluid">
    <p><h4 style="bg-success" class="text-primary"> Listado de Usuarios </h4></p>
    </div>
    </section>
    <hr style="   border-width: 3px; dorder:solid;" class="bg-danger">
<div class="container-fluid">
	<div class=" col-md-12">
			  <table id="tabla"  class=" table table-striped table-sm" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre del Usuario</th>
                        <th scope="col">Nivel de Usuario</th>
                        <th scope="col">Estatus de Usuario</th>
                        <th scope="col">Editar</th>               
                    </tr>
                </thead>
                <tbody>
        <?php
	 	foreach ($listar as $listar) {
	 ?>
	  <tr>
            <th scope="row"><?php echo $listar->id_usuario;?></th>
            <td><?php echo strtolower ($listar->nombre_usuario);?></td>
            <td><?php echo $listar->nivel_usuario;?></td>
            <td><?php echo $listar->estatus_usuario;?></td>
            <td style="text-align: center;"><a href="<?php echo base_url('index.php/C_editar_usuario/edit_usuario/'.$listar->id_usuario)?>" ><img src="<?php echo base_url()?>public/img/1319.png" ></a></td>
           
    </tr>
	<?php
	}
	?>       
        </tbody>


</body>