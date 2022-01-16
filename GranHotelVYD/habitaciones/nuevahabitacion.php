<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php.php");
}
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
	<h1>Nueva Habitacion</h1>

	<form method="post" action="inserthabitacion.php">
		<label>Precio</label><input type="text" name="precio" placeholder="Ej: 150.00">
		<input type="submit" name="enviar">
	</form>
</div>


 </body>
 </html>