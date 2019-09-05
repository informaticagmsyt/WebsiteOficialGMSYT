<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<body>
<section>
  <div class="container">
      <div class="row">

        <div class="col-md-6">
          <img src="public/img/banner.png">
        </div>
      </div>
  </div>
</section>
<br><br><br><br>
<div class="container">
	<div class="offset-md-3 col-md-6">
		<div class="card text-center">
  			<div class="card-header text-white bg-danger"> <b>Bienvenidos al Sistema de Monitoreo de Registro </b></div>
  			<div class="card-body">
    			<form action="<?php echo base_url('index.php/c_login/ingresar');?>" method="POST">
  					<div class="form-group">
    					<label for="exampleInputEmail1">Usuario</label>
    					<input  type="text" name="nombre_usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nombre de Usuario" required > 
  					</div>
 					 <div class="form-group">
    					<label for="exampleInputPassword1">Contraseña</label>
    					<input  type="password" name="contraseña" class="form-control" id="exampleInputPassword1" placeholder="Password" required >
						</div>
					
  					<button type="submit" class="btn btn-primary">Entrar</button>
				
					</form>
  			</div>
  				<div class="card-footer text-muted"><small>Ingrese Usuario y Contraseña para Accesar al Sistema</small></div>
		</div>
	</div>
</div>
</body>