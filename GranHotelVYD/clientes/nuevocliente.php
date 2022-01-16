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
 	<title>HABITACIONES</title>
 </head>
 <body>
 
<div style=" float: left; width: 29%; border: 2px solid red;">
	<a href="../agencias/show.php">Agencias</a><br>
	<a href="../habitaciones/show.php">Habitaciones</a><br>
	<a href="show.php">Clientes</a><br>
	<a href="../reservas/show.php">Reservas</a><br>
	
</div>
<div style=" float: right; width: 70%; border: 2px solid blue;">
	<h1>Nuevo Cliente</h1>

	<form method="post" action="insertcliente.php">
		<label>Nombre</label>
		<input type="text" name="nombre"><br>
		<label>Apellido</label>
		<input type="text" name="apellido"><br>
		<label>Tipo de cedula</label>
		<select name="tipo_doc">
			<option value="V">V</option>
			<option value="E">E</option>
			<option value="P">P</option>
		</select><br>
		<label>Numero de Documento</label>
		<input type="text" name="numero_doc"><br>
		<label>Direccion</label>
		<input type="text" name="direccion"><br>
		<label>Telefono</label>
		<input type="text" name="telefono"><br>
		<label>Agencia</label>
		<select name="agencia">
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

	</form>

</div>


 </body>
 </html>