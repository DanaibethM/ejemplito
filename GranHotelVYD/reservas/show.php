<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php");
}
require('../conexion.php');

$solicitud="SELECT * FROM reserva";
$resultado=mysqli_query($conexion, $solicitud);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>RESERVAS</title>
 </head>
 <body>
 
<div style=" float: left; width: 29%; border: 2px solid red;">
	<a href="../agencias/show.php">Agencias</a><br>
	<a href="../habitaciones/show.php">Habitaciones</a><br>
	<a href="../clientes/show.php">Clientes</a><br>
	<a href="../reservas/show.php">Reservas</a><br>

</div>
<div style=" float: right; width: 70%; border: 2px solid blue">
	<h1>Reservas</h1>
	<table>
		<tr>
			<th style="padding: 8px; font-weight: bold;">Reserva</th>
			<th>Cliente</th>
			<th>Habitación</th>
		</tr>
		<?php 
		while($fila=mysqli_fetch_array($resultado)) {
			$solicitud2="SELECT * FROM cliente WHERE id_cliente='".$fila['id_cliente']."'";
			$resultado2=mysqli_query($conexion,$solicitud2);
			echo "<tr><td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['id_reserva']."</td>";
			while ($fila2=mysqli_fetch_array($resultado2)) {
				echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila2['nombre_cliente']." ".$fila2['apellido_cliente']."</td>";
			}
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['id_habitacion']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'><a href='eliminarreserva.php?id=".$fila['id_reserva']."'>Eliminar</a></td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'><a href='../facturas/show.php?id=".$fila['id_reserva']."&id_h=".$fila['id_habitacion']."'>Mostrar Factura</a></td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'><a href='actualizarreserva.php?id=".$fila['id_reserva']."&hab=".$fila['id_habitacion']."&client=".$fila['id_cliente']."'>Actualizar</a></td></tr>";

		}

		?>
	</table>
	<a href="nuevareserva.php" style="padding-left: 195px;">Añadir Reserva</a>
</div>
  

 </body>
 </html>