<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:../index.php.php");
}
require('../conexion.php');

$cedula=$_GET['buscador'];

$solicitud="SELECT * FROM cliente WHERE numero_doc='$cedula'";
$resultado=mysqli_query($conexion, $solicitud);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Clientes</title>
 </head>
 <body>
 
<div style=" float: left; width: 29%; border: 2px solid red;">
	<a href="agencias.php">Agencias</a><br>
	<a href="habitaciones.php">Habitaciones</a><br>
	<a href="clientes.php">Clientes</a><br>
	<a href="reservas.php">Reservas</a><br>
	
</div>
<div style=" float: right; width: 70%; border: 2px solid blue;">
	<h1>Clientes</h1>
	<form method="post" action="buscar.php">
		<label>Buscar</label><br>
		<label>Ingrese su cedula</label><input type="text" name="buscador">
		<input type="submit" name="enviar" value="Buscar">
	</form>
	<table>
		<tr>
			<th style="padding: 8px; font-weight: bold;">Nombre</th>
			<th style="padding: 8px; font-weight: bold;">Apellido</th>
			<th style="padding: 8px; font-weight: bold;">Tipo documento</th>
			<th style="padding: 8px; font-weight: bold;">Numero documento</th>
			<th style="padding: 8px; font-weight: bold;">Direccion</th>
			<th style="padding: 8px; font-weight: bold;">Telefono</th>
			<th style="padding: 8px; font-weight: bold;">Agencia</th>
		</tr>

		<?php 
		while($fila=mysqli_fetch_array($resultado)) {
			echo "<tr><td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['nombre_cliente']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['apellido_cliente']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['tipo_doc']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['numero_doc']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['direccion_cliente']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['telefono_cliente']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'>".$fila['id_agencia']."</td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'><a href='actualizarcliente.php?id=".$fila['id_cliente']."'>Actualizar</a></td>";
			echo "<td style='border: 2px solid black; padding: 5px; text-align: center;'><a href='eliminarcliente.php?id=".$fila['id_cliente']."'>Eliminar</a></td></tr>";
		}

		?>
	</table>

	<a href="nuevocliente.php" style="padding-left: 195px;">Añadir Cliente</a>
	<a href="show.php">Mostrar Clientes</a>
</div>


 </body>
 </html>