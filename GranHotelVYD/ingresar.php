<?php 
require('conexion.php');

$user=$_POST['user'];
$password=$_POST['password'];

$solicitud ="SELECT * FROM trabajador WHERE usuario='$user'";
$resultado=mysqli_query($conexion, $solicitud);

foreach ($resultado as $key) {

	if ($key['contraseña'] == $password) {
		session_start();
		$_SESSION['id']=$key['id_trabajador'];
		header("location:principal.php");
	}
	else{
		echo "Las contraseñas NO coinciden";
	}

}
 ?>