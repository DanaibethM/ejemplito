<?php
	session_start();
	if ($_SESSION['id']==null || $_SESSION['id']=='') {
		header("location:../index.php");
	}
	$id=$_GET['id'];
	$client=$_GET['client'];
	$hab=$_GET['hab'];
	require('../conexion.php');
	$solicitud="SELECT * FROM reserva WHERE id_reserva='$id'";
	$solicitud2="SELECT * FROM habitacion"; 
	$solicitud3="SELECT * FROM cliente"; 
	$resultado=mysqli_query($conexion, $solicitud);
	$resultado2=mysqli_query($conexion, $solicitud2);
	$resultado3=mysqli_query($conexion, $solicitud3);
 ?>
<?php foreach ($resultado as $key2): ?>
	

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

	<?php 
	$solicitud5="SELECT * FROM cliente WHERE id_cliente='".$key2['id_cliente']."'";  
	$resultado5=mysqli_query($conexion, $solicitud5);?>
	<?php foreach ($resultado5 as $key5): ?>
		<h1>Actualizar Reserva del Cliente: <?php echo $key5['nombre_cliente']." ".$key5['apellido_cliente']; ?></h1>
	<?php endforeach ?>
	<form method="post" action="updatereserva.php">
		<input type="hidden" name="id" value="<?php echo($id); ?>">
		<input type="hidden" name="client" value="<?php echo($client); ?>">
		<input type="hidden" name="hab" value="<?php echo($hab); ?>">
		<label>Cliente</label> 
		
		<select name="id_cliente">
			<?php foreach ($resultado3 as $key): ?>
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
	    </select><label>Habitación Vieja: </label>
	    <?php  echo $key2['id_habitacion']; ?><br>
         <?php endforeach ?>
		<input type="submit" name="enviar">
	</form>
</div>


 </body>
 </html>