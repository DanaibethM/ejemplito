<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php.php");
}
$id=$_GET['id'];
require('../conexion.php');
$solicitud="SELECT * FROM habitacion WHERE id_habitacion='$id'";
$resultado=mysqli_query($conexion, $solicitud);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>HABITACIONES</title>
 </head>
 <body>
 
<div style=" float: left; width: 29%; border: 2px solid red;">
	<a href="../agencias/show.php">Agencias</a><br>
	<a href="show.php">Habitaciones</a><br>
	<a href="../clientes/show.php">Clientes</a><br>
	<a href="../reservas/show.php">Reservas</a><br>
</div>
<div style=" float: right; width: 70%; border: 2px solid blue">
	<h1>Actualizar Habitacion</h1>

	<form method="post" action="updatehabitacion.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<?php foreach ($resultado as $key): ?>
		<label>Estado</label><input type="texto" name="estado" value="<?php echo $key['estado']; ?>">
		<label>Precio</label><input type="text" name="precio" value="<?php echo $key['precio']; ?>">
		<input type="submit" name="enviar">
		<?php endforeach ?>
	</form>
</div>


 </body>
 </html>