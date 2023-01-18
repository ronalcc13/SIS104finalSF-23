<?php
	require "../db_connect.php";
	require "verify_librarian.php";
	require "header_librarian.php";
?>

<html>
	<head>
		<title>Bienvenido Administrador</title>
		<link rel="stylesheet" type="text/css" href="css/EstilosAdmin.css" />
	</head>
	<body>
		<div id="allTheThings">
			<a href="visor.php">
				<input type="button" value="VER DATOS" />
			</a><br /><br />
			<br>
			
			<a href="administrarDatos.php">
				<input type="button" value="Administrar Datos" />
			</a><br />
			<a href="update_copies.php">
				<input type="button" value="Actualizar Productos" />
			</a><br />
		</div>
	</body>
</html>