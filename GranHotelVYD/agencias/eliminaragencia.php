<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php.php");
}
require('../conexion.php');

$id=$_GET['id'];

$solicitud="DELETE FROM agencia WHERE id_agencia='$id'";
$resultado=mysqli_query($conexion, $solicitud);
header("location: show.php");

 ?>