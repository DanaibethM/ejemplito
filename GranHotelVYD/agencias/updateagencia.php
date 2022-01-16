<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php.php");
}
require("../conexion.php");

$id=$_POST['id_agencia'];
$nombre=$_POST['nombre_agencia'];
$direccion=$_POST['direccion_agencia'];
$telefono=$_POST['telefono_agencia'];


$solicitud="UPDATE agencia SET nombre_agencia='$nombre', direccion_agencia='$direccion', telefono_agencia='$telefono' WHERE id_agencia='$id'";

$resultado=mysqli_query($conexion, $solicitud);
header("location: show.php");

 ?>