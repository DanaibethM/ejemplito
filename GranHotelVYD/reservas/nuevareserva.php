<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php");
}
require('../conexion.php');
$solicitud="SELECT * FROM cliente";
$solicitud2="SELECT * FROM 	habitacion";
$resultado=mysqli_query($conexion, $solicitud);
$resultado2=mysqli_query($conexion, $solicitud2);
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
	<h1>Nueva Reserva</h1>

	<form method="post" action="insertreserva.php">
		<label>Cliente</label> 
		<select name="id_cliente">
		<?php foreach ($resultado as $key): ?>	
			<option value="<?php echo($key['id_cliente']) ?>"> <?php echo $key['nombre_cliente']." ".$key['apellido_cliente']; ?> 
			</option>	
		<?php endforeach ?>
		</select><br>
		<label>Habitación</label>
		<select name="id_habitacion"> 
			<?php foreach ($resultado2 as $key): ?>	
              <option value="<?php echo($key['id_habitacion']) ?>"> 
              <?php echo $key['id_habitacion']; ?> 
			  </option>	
		    <?php endforeach ?>
	    </select><br>
		<input type="submit" name="enviar">
	</form>
</div>


</body>
</html>