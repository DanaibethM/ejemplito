<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php");
}
require('../conexion.php');
$solicitud="SELECT * FROM habitacion";
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
	<h1>Habitaciones</h1>
	<table>
		<tr>
			<th style="padding: 8px; font-weight: bold;">Numero de Habitacion</th>
			<th>Estado de la Habitacion</th>
			<th>Precio de la Habitacion</th>
		</tr>

		<?php 
		while($fila=mysqli_fetch_array($resultado)) {
			echo "<tr><td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['id_habitacion']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['estado']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['precio']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'><a href='actualizarhabitacion.php?id=".$fila['id_habitacion']."'>Actualizar</a></td></tr>";
		}

		?>
	</table>

	<a href="nuevahabitacion.php" style="padding-left: 195px;">Añadir Habitacion</a>
</div>


 </body>
 </html>