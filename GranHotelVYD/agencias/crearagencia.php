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
	<a href="agencias.php">Agencias</a><br>
	<a href="habitaciones.php">Habitaciones</a><br>
	<a href="clientes.php">Clientes</a><br>
	<a href="reservas.php">Reservas</a><br>
	
</div>
<div style=" float: right; width: 70%; border: 2px solid blue;">
	<h1>Nuevo Cliente</h1>

	<form method="post" action="insertagencia.php">
		<label>Nombre de la agencia</label>
		<input type="text" name="nombre_agencia"><br>
		<label>Direccion de la agencia</label>
		<input type="text" name="direccion_agencia"><br>
		<label>Telefono</label>
		<input type="text" name="telefono_agencia">
		<input type="submit" name="enviar">

	</form>

</div>


 </body>
 </html>