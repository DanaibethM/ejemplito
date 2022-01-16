<?php
session_start();
if ($_SESSION['id']==null || $_SESSION['id']=='') {
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="icon/css/fontello.css">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<title>Gran Hotel V&D</title>
</head>
<body>

<div>
	<a href="agencias/show.php">Agencias</a><br>
	<a href="habitaciones/show.php">Habitaciones</a><br>
	<a href="clientes/show.php">Clientes</a><br>
	<a href="reservas/show.php">Reservas</a><br>
	
</div>
<div>

	<h1>Aqui el contenido</h1>
</div>

</body>
</html>