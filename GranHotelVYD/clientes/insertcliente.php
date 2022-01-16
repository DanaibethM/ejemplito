<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php.php");
}
require('../conexion.php');

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$tipo_doc=$_POST['tipo_doc'];
$numero_doc=$_POST['numero_doc'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$agencia=$_POST['agencia'];
$id_agencia=$_POST['id_agencia'];


$solicitud="INSERT INTO cliente (nombre_cliente, apellido_cliente, tipo_doc, numero_doc, direccion_cliente, telefono_cliente, agencia, id_agencia) VALUES ('$nombre', '$apellido', '$tipo_doc', '$numero_doc', '$direccion', '$telefono', '$agencia', '$id_agencia')";
$resultado=mysqli_query($conexion, $solicitud);
header("location:show.php");

 ?>