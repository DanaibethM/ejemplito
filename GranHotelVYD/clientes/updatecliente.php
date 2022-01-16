<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php.php");
}
require("../conexion.php");

$id=$_POST['id_cliente'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$tipo_doc=$_POST['tipo_doc'];
$numero_doc=$_POST['numero_doc'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$agencia=$_POST['agencia'];
$id_agencia=$_POST['id_agencia'];

$solicitud="UPDATE cliente SET nombre_cliente='$nombre', apellido_cliente='$apellido', tipo_doc='$tipo_doc', numero_doc='$numero_doc', direccion_cliente='$direccion', telefono_cliente='$telefono', agencia='$agencia', id_agencia='$id_agencia' WHERE id_cliente='$id'";

$resultado=mysqli_query($conexion, $solicitud);
header("location: show.php");

 ?>