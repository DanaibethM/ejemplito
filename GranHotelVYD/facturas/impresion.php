<?php
require("../conexion.php");

$id_reserva=$_GET['id_r'];

$query="SELECT * FROM impresion_factura WHERE id_reserva='$id_reserva'";
$result=mysqli_query($conexion,$query);

require_once __DIR__ . "../../vendor/autoload.php";

	$mpdf = new \Mpdf\Mpdf();
foreach ($result as $key) {
	$mpdf->WriteHTML("
		<table border='1'>
 		<tr>
 			<th colspan='6'>FACTURA</th>
 		</tr>
 		<tr>
 			<th>CLIENTE</th>
 			<th>CEDULA</th>
 			<th>Nº DE HABITACION</th>
 			<th>ESTANCIA</th>
 			<th>FECHA DE FACTURA</th>
 			<th>TOTAL</th>
 		</tr>
 		<tr>
 			<td>".$key['nombre_cliente']."</td>
 			<td>".$key['cedula']."</td>
 			<td>".$key['habitacion']."</td>
 			<td>".$key['estancia']."</td>
 			<td>".$key['fecha_factura']."</td>
 			<td>".$key['total']."</td>
 		</tr>
 		</table>		
		");
	}
	$mpdf->Output();
	die();
 ?>