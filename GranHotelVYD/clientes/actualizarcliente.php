<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php.php");
}
require('../conexion.php');

$id=$_GET['id'];

$solicitudVieja="SELECT * FROM cliente WHERE id_cliente='$id'";
$resultado2=mysqli_query($conexion, $solicitudVieja);
$solicitud="SELECT * FROM agencia";
$resultado=mysqli_query($conexion, $solicitud);
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
	<a href="nuevafactura.php">Factura</a><br>
</div>
<div style=" float: right; width: 70%; border: 2px solid blue;">
	<h1>Actualizar Cliente</h1>

	<form method="post" action="updatecliente.php">
		<?php foreach ($resultado2 as $key): ?>
		<input type="hidden" name="id_cliente" value="<?php echo($key['id_cliente']); ?>">
			
		<label>Nombre</label>
		<input type="text" name="nombre" value="<?php echo $key['nombre_cliente']; ?>"><br>
		<label>Apellido</label>
		<input type="text" name="apellido" value="<?php echo $key['apellido_cliente']; ?>"><br>
		<label>Tipo de cedula</label>
		<select name="tipo_doc" value="<?php echo $key['tipo_doc']; ?>">
			<option value="V">V</option>
			<option value="E">E</option>
			<option value="P">P</option>
		</select><br>
		<label>Numero de Documento</label>
		<input type="text" name="numero_doc" value="<?php echo $key['numero_doc']; ?>"><br>
		<label>Direccion</label>
		<input type="text" name="direccion" value="<?php echo $key['direccion_cliente']; ?>"><br>
		<label>Telefono</label>
		<input type="text" name="telefono" value="<?php echo $key['telefono_cliente']; ?>"><br>
		<label>Agencia</label>
		<select name="agencia" value="<?php echo $key['agencia']; ?>">
			<option value="Si">Si</option>
			<option value="No">No</option>
		</select><br>
		<label>Nombre de la agencia</label>
		<select name="id_agencia">
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