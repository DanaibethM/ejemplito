<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php.php");
}
require('../conexion.php');

$id=$_GET['id'];

$solicitud="SELECT * FROM agencia WHERE id_agencia='$id'";
$resultado=mysqli_query($conexion, $solicitud);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>AGENCIAS</title>
 </head>
 <body>
 
<div style=" float: left; width: 29%; border: 2px solid red;">
	<a href="agencias.php">Agencias</a><br>
	<a href="habitaciones.php">Habitaciones</a><br>
	<a href="clientes.php">Clientes</a><br>
	<a href="reservas.php">Reservas</a><br>
	<a href="nuevafactura.php">Factura</a><br>
</div>
<div style=" float: right; width: 70%; border: 2px solid blue;">
	<h1>Actualizar Agencia</h1>

	<form method="post" action="updateagencia.php">
		<?php foreach ($resultado as $key): ?>
		<input type="hidden" name="id_agencia" value="<?php echo($key['id_agencia']); ?>">
			
		<label>Nombre agencias</label>
		<input type="text" name="nombre agencia" value="<?php echo $key['nombre_agencia']; ?>"><br>
		<label>Dirección agencia</label>
		<input type="text" name="direccion agencia" value="<?php echo $key['direccion_agencia']; ?>"><br>
		<label>Teléfono de agencia</label>
		<input type="text" name="telefono agencia" value="<?php echo $key['telefono_agencia']; ?>"><br>

			<?php foreach ($resultado as $key): ?>
				<?php echo "<option value='".$key['id_agencia']."'>".$key['nombre_agencia']."</option>"; ?>
			<?php endforeach ?>
		</select><br>
		<input type="submit" name="enviar">

		<?php endforeach ?>
	</form>

</div>


 </body>
 </html>