<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php");
}
require('../conexion.php');

$id=$_POST['id'];
$estado=$_POST['estado'];
$precio=$_POST['precio'];

$solicitud="UPDATE habitacion SET estado='$estado', precio='$precio' WHERE id_habitacion='$id'";
$resultado=mysqli_query($conexion, $solicitud);
header("location:show.php");


 ?>