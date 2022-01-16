<?php 
require('../conexion.php');
$id=$_POST['id'];
$id_h=$_POST['id_h'];
$solicitud="SELECT * FROM habitacion WHERE id_habitacion='$id_h'";
$resultado=mysqli_query($conexion, $solicitud);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>FACTURAR</title>
 </head>
 <body>
 
<div style=" float: left; width: 29%; border: 2px solid red;">
	<a href="../agencias/show.php">Agencias</a><br>
	<a href="../habitaciones/show.php">Habitaciones</a><br>
	<a href="../clientes/show.php">Clientes</a><br>
	<a href="../reservas/show.php">Reservas</a><br>
	
</div>
<div style=" float: right; width: 70%; border: 2px solid blue">
	<h1>Crear factura</h1>
	<form method="post" action="insertfactura.php">
	<?php foreach ($resultado as $key): ?>
		<input type="hidden" name="id_reserva" value="<?php echo($id) ;?>">
		<label>Precio de la habitacion(por dia)</label>
		<input type="text" name="precio" value="<?php echo $key['precio'] ?>" readonly="readonly"><br>
		<label>Fecha de Llegada</label>
		<input type="date" name="fecha_inicio"><br>
		<label>Fecha de Ida</label>
		<input type="date" name="fecha_fin"><br>
		<input type="submit" name="enviar">
		<?php endforeach ?>
	</form>
</div>


</body>
</html>