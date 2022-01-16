<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php.php");
} 
require('../conexion.php');
$precio=$_POST['precio'];
$solicitud="INSERT INTO habitacion(estado, precio) VALUES('DISPONIBLE','$precio')";
$resultado=mysqli_query($conexion,$solicitud);
header("location:show.php");
 ?>