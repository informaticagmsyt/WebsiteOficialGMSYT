<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<body>
<br>
<section>
    <div  class="container-fluid">
    <p><h4 style="bg-success" class="text-primary">Crear Usuario </h4></p>
    </div>
    </section>
    <hr style="   border-width: 3px; dorder:solid;" class="bg-danger">
<div class="container">
	<div class=" offset-md-2 col-md-8">

    			<form action="<?php echo  base_url();?>index.php/C_usuario/guardar" method="POST">
						<br>
                           <h5 class="card-title"> <b> Datos del Usuario</b></h5>
                           <hr> 
  					<div class="form-group">
    					<label for="exampleInputEmail1">Nombre de Usuario</label>
    					<input type="text" name="nombre_usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Usuario" required> 
  					</div>
					  <img src="g.png" alt="">
 					 <div class="form-group">
    					<label for="exampleInputPassword1">Contraseña</label>
    					<input type="password" name="contraseña" class="form-control" id="exampleInputPassword1" placeholder="Password"required >
  					</div>
					  <div class="form-group">
                        <label for="formGroupExampleInput">Nivel de Usuario</label>
                            <select   name="nivel_usuario" class="form-control" required="text" >
                                 <option value="caracterizador">Caracterizador</option>
                                 <option value="coordinador">Coordinador</option>
                                 <option value="gerente">Gerente</option>
                            </select>
                      </div>
					 <div class="form-group">
                        <label for="formGroupExampleInput">Estatus</label>
                            <select   name="estatus_usuario" class="form-control" required="text" >
                                 <option value="activo">Activo</option>
                                 <option value="inactivo">Inactivo</option>  
                            </select>
                     </div>
  					<button type="submit" class="btn btn-primary" value="guardar">Registrar</button>
				</form>

</div>
</body>