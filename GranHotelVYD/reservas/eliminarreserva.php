<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php");
}
require('../conexion.php');

$id=$_GET['id'];

$solicitud="DELETE FROM reserva WHERE id_reserva='$id'";
$resultado=mysqli_query($conexion, $solicitud);
header("location: show.php");

 ?>