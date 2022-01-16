<?php 
require('../conexion.php');
$reserva=$_POST['id_reserva'];
$precio=$_POST['precio'];
$fechainicio=$_POST['fecha_inicio'];
$fechafin=$_POST['fecha_fin'];


$solicitud="INSERT INTO facturacion (id_reserva, fecha_inicio, fecha_fin, total) VALUES ('$reserva', '$fechainicio', '$fechafin','$precio')";
$resultado=mysqli_query($conexion, $solicitud);
header("location:../reservas/show.php");

 ?>