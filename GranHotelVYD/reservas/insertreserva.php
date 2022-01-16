<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php");
}
require('../conexion.php');
$trabajador=$_SESSION['id'];
$cliente=$_POST['id_cliente'];
$habitacion=$_POST['id_habitacion'];

$solicitud="UPDATE habitacion SET estado='OCUPADO' WHERE id_habitacion='$habitacion'";
$resultado=mysqli_query($conexion,$solicitud);

$solicitud2="INSERT INTO reserva (id_cliente, id_habitacion) VALUES ('$cliente', '$habitacion')";
$resultado2=mysqli_query($conexion, $solicitud2);

$solicitud3="INSERT INTO relacion(id_cliente,id_trabajador,id_habitacion) VALUES('$cliente','$trabajador','$habitacion')";
$resultado3=mysqli_query($conexion,$solicitud3);

header("location:show.php");
 ?>