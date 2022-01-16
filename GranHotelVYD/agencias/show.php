<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php.php");
}
require('../conexion.php');
$solicitud="SELECT * FROM agencia";
$resultado=mysqli_query($conexion, $solicitud);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Clientes</title>
 </head>
 <body>
 
<div style=" float: left; width: 29%; border: 2px solid red;">
	<a href="show.php">Agencias</a><br>
	<a href="../habitaciones/show.php">Habitaciones</a><br>
	<a href="../clientes/show.php">Clientes</a><br>
	<a href="../reservas/show.php">Reservas</a><br>
	
	
</div>
<div style=" float: right; width: 70%; border: 2px solid blue;">
	<h1>Agencia</h1>
	<table>
		<tr>
			<th style="padding: 8px; font-weight: bold;">Nombre Agencia</th>
			<th style="padding: 8px; font-weight: bold;">Direccion de agencia</th>
			<th style="padding: 8px; font-weight: bold;">Telefono agencia</th>
		</tr>

		<?php 
		while($fila=mysqli_fetch_array($resultado)) {
			echo "<tr><td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['nombre_agencia']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['direccion_agencia']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['telefono_agencia']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'><a href='actualizaragencia.php?id=".$fila['id_agencia']."'>Actualizar</a></td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'><a href='eliminaragencia.php?id=".$fila['id_agencia']."'>Eliminar</a></td></tr>";
		}

		?>
	</table>

	<a href="crearagencia.php" style="padding-left: 195px;">Añadir Agencia</a>
</div>


 </body>
 </html>