<?php 
require('../conexion.php');
$id=$_GET['id'];
$id_h=$_GET['id_h'];
$solicitud="SELECT * FROM facturacion WHERE id_reserva='$id'";
$resultado=mysqli_query($conexion, $solicitud);
$contador=0;
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Factura</title>
 </head>
 <body>
 
<div style=" float: left; width: 29%; border: 2px solid red;">
	<a href="../agencias/show.php">Agencias</a><br>
	<a href="../habitaciones/show.php">Habitaciones</a><br>
	<a href="../clientes/show.php">Clientes</a><br>
	<a href="../reservas/show.php">Reservas</a><br>
	
	
</div>
<div style=" float: right; width: 70%; border: 2px solid blue;">
	<h1>Factura</h1>
	<table>
		<tr>
			<th style="padding: 8px; font-weight: bold;">fecha inicio</th>
			<th style="padding: 8px; font-weight: bold;">fecha fin</th>
			<th style="padding: 8px; font-weight: bold;">fecha factura</th>
			<th style="padding: 8px; font-weight: bold;">total</th>
		</tr>

		<?php 
		while($fila=mysqli_fetch_array($resultado)) {
			echo "<tr><td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['fecha_inicio']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['fecha_fin']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['fecha_factura']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['total']."</td>";
			$contador++;
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'><a href='impresion.php?id_r=".$fila['id_reserva']."'>Impresion</a></td></tr>";
		}


		?>
	</table>
<?php if ($contador<1): ?>
	<form method="post" action="facturacion.php">
		<input type="hidden" name="id" value="<?php echo($id) ?>">
		<input type="hidden" name="id_h" value="<?php echo($id_h) ?>">
		<input type="submit" name="enviar" value="crear factura">
	</form>
<?php endif ?>
</div>


 </body>
 </html>