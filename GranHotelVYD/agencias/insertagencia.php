<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php.php");
}
require('../conexion.php');

$nombre=$_POST['nombre_agencia'];
$direccion=$_POST['direccion_agencia'];
$telefono=$_POST['telefono_agencia'];


$solicitud="INSERT INTO agencia (nombre_agencia, direccion_agencia, telefono_agencia) VALUES ('$nombre', '$direccion', '$telefono')";
$resultado=mysqli_query($conexion, $solicitud);
header("location:show.php");

 ?>