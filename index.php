<!DOCTYPE html>
<html>
<head>
	<title>zapateria</title>
	<meta charset="utf-8">
</head>
<body>

	<form method="POST">
		<h2>Registro de Zapatos</h2>
		
		<input type="text" name="marca" placeholder="Marca">
		<input type="text" name="modelo" placeholder="Modelo">
		<input type="text" name="talla" placeholder="Talla">
		<input type="text" name="Can_inv" placeholder="Existencia">
		<input type="submit" name="registrar">
	</form>
	<?php 
		include("reg.php");
	?>


	<h1> Inventario de zapatos</h1>

	<?php 
		include("inv.php");
	?>

	<h1> Venta de Zapatos</h1>
	<?php 
		include("ventas.php");
	?>

</body>
</html>