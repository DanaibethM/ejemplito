<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php");
}
require('../conexion.php');

$client=$_POST['client'];
$hab=$_POST['hab'];
$id=$_POST['id'];
$trabajador=$_SESSION['id'];
$cliente=$_POST['id_cliente'];
$habitacion=$_POST['id_habitacion'];

$solicitud="UPDATE relacion SET id_cliente='$cliente', id_trabajador='$trabajador', id_habitacion='habitacion' WHERE id_cliente='$client' AND id_habitacion='$hab'";

$solicitud2="UPDATE reserva SET id_cliente='$cliente', id_habitacion='$habitacion' WHERE id_reserva='$id'";
$resultado2=mysqli_query($conexion, $solicitud2);
header("location:show.php");
 ?>