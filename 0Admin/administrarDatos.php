<?php
	require "../db_connect.php";
	require "verify_librarian.php";
	require "header_librarian.php";
?>

<html>
	<head>
		<title>Agregar Producto</title>
		<link rel="stylesheet" type="text/css" href="../css/EstiloGlobal.css">
		<link rel="stylesheet" type="text/css" href="css/EstilosAdmin.css">
	</head>
	<body>
		<form class="cd-form" method="POST" action="#">
			<legend>Ingresa toda la información del Producto</legend>
			
				<div class="error-message" id="error-message">
					<p id="error"></p>
				</div>
				
				<div class="icon">
					<input class="b-isbn"  type="number" name="a_ids" placeholder="Serie" required />
				</div>
				
				<div class="icon">
					<input class="b-title" type="text" name="a_titulo" placeholder="Titulo" required />
				</div>
				
				<center class="icon">
					<h1>Fecha de Creacion</h1><input class="b-author" type="date" name="a_dateC" required />
					<h1>Fecha de Bencimiento</h1><input class="b-author" type="date" name="a_dateV" required />
</center>

				
				<div class="icon">
					<input class="b-price" type="number" name="a_precio" placeholder="Precio" required />
				</div>
				
				<div class="icon">
					<input class="b-copies" type="number" name="a_cantidad" placeholder="Cantidad" required />
				</div>
				
				<br />
				<input type="submit" name="b_add" value="Agregar" />
		</form>
		<center><a href="home.php" /><h1>Volver Atras</h1></a></center>	
	<body>
	<?php
	if(isset($_POST['b_add'])){	
	$v1=$_POST['a_ids'];
	$v2=$_POST['a_titulo'];
	$v3=$_POST['a_dateC'];
	$v4=$_POST['a_dateV'];
	$v5=$_POST['a_precio'];
	$v6=$_POST['a_cantidad'];
	$con->query("INSERT INTO `productos`() VALUES ('','$v1','$v2', '$v3','$v4','$v5','$v6')");
	echo("<center><h1>Con Exito Agregado</h1></center>");
	}
?>
</html>