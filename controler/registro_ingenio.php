<?php
include '../conexion.php';
$conexion=conectar();
/*************************************************/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

/*************************************************/
$cedula        =  $_POST['cedula'];
$nombre	       =  strtoupper($_POST['nombre']);
$apellido      =  strtoupper($_POST['apellido']);
$telefono      =  $_POST['telefono'];
$t_emp         =  strtoupper($_POST['t_emprendimiento']);
$sexo          =  strtoupper($_POST['sexo']);
$f_nacimiento  =  $_POST['f_nacimiento'];
/************************************************/
$s_ubicacion   =  strtoupper( $_POST['s_ubicacion']);
$localidad     =  strtoupper($_POST['localidad']);
$n_localidad   =  strtoupper($_POST['n_localidad']);
$e_social      =  strtoupper($_POST['e_social']);
$n_social      =  strtoupper($_POST['n_social']);
/************************************************/
$e_produccion    =  strtoupper($_POST['e_produccion']);
$n_produccion    =  strtoupper($_POST['n_produccion']);
$t_requerimiento =  strtoupper($_POST['t_requerimiento']);
/************************************************/
$email         =  strtoupper($_POST['email']);
$estado        =  $_POST['estado'];
$municipio     =  $_POST['municipio'];
$parroquia     =  $_POST['parroquia']; 
$movimiento    =  strtoupper($_POST['movimiento']); 
$t_pro         =  strtoupper($_POST['t_proyecto']); 
$d_proyecto      =  strtoupper($_POST['d_proyecto']);
$hoy = date("j- n-Y");
/*************************************************/
$sql1="SELECT * FROM ingenio WHERE cedula='$cedula'";
$query1=pg_query($conexion,$sql1);
		$d=pg_fetch_array($query1);	
			$s=$d['cedula'];
if (!$s) {
	$sql="INSERT into ingenio(cedula,nombre,apellido,telefono,email,t_emprendimiento,estado,municipio,parroquia,movimiento,t_proyecto,d_proyecto,pertenece,fecha,sexo,f_nacimiento,s_ubicacion,localidad,n_localidad,e_social,n_social,e_produccion,n_produccion,t_requerimiento) VALUES ('$cedula','$nombre','$apellido','$telefono','$email','$t_emp','$estado','$municipio','$parroquia','$movimiento','$t_pro','$d_proyecto','Proyecto Ingenio','$hoy','$sexo','$f_nacimiento','$s_ubicacion','$localidad','$n_localidad','$e_social','$n_social','$e_produccion','$n_produccion','$t_requerimiento')";
		$query=pg_query($conexion,$sql);
			if ($query) {
				$mail = new PHPMailer(true);
				try {
									//Server settings
									$mail->SMTPDebug = 3;                                       // Enable verbose debug output
									$mail->isSMTP();                                            // Set mailer to use SMTP
									$mail->Host       = 'smtp.gmail.com';  						// Specify main and backup SMTP servers
									$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
									$mail->Username   = 'ingenio.gmsyt@gmail.com';              // SMTP username
									$mail->Password   = 'ja.010203';                            // SMTP password
									$mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
									$mail->Port       = 465;                                    // TCP port to connect to
									//Recipients
									$mail->setFrom('ingenio.gmsyt@gmail.com', 'Fundacion Gran Mision Saber y Trabajo');
									$mail->addAddress($email,$nombre);     // Add a recipient
									// Content
									$mail->isHTML(true);                   // Set email format to HTML
									$mail->Subject = 'Registro en el Proyecto Ingenio Completado';
									$mail->Body    = 'Felicidades su registro en el Proyecto Ingenio fue Exitoso en los proximos dias sera contactado por nuestro Personal " Por la  Soberania  Juntos Podemos"';
									$mail->send();
									echo 'Mesnsaje Enviado';
								} catch (Exception $e) {
									echo " Error: {$mail->ErrorInfo}";
								}
							
/*********************************************************************************************/		
echo '  <script type="text/javascript">
			alert("Su Registro en el Proyecto Ingenio fue Completado con Exito");
			document.location.href ="../index.html";
		</script>';				
			}
}else{
	echo '  <script type="text/javascript">
     		 alert("Usted ya se encuentra Registrado en el Proyecto Ingenio");
        	 document.location.href ="../index.html";
        </script>';	
}

?>
