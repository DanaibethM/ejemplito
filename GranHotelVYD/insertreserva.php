<?php 
require('conexion.php');
$cliente=$_POST['id_cliente'];
$habitacion=$_POST['id_habitacion'];


$solicitud="INSERT INTO reserva (id_cliente, id_habitacion) VALUES ('$cliente', '$habitacion')";
$resultado=mysqli_query($conexion, $solicitud);
header("location:reservas.php");

$solicitud2="UPDATE habitacion SET estado='OCUPADO' WHERE id_habitacion='$habitacion'";
$resultado2=mysqli_query($conexion,$solicitud2);

 ?>