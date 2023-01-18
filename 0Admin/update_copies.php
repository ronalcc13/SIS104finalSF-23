<?php
	require "../db_connect.php";
	require "header_librarian.php";
	?>

<html>
	<head>
		<title>Actualización de Datos</title>
		<link rel="stylesheet" type="text/css" href="../css/EstiloGlobal.css">
		<link rel="stylesheet" type="text/css" href="css/EstilosAdmin.css">
	</head>
	<body>
		<form class="cd-form" method="POST" action="#">
			<legend>Actualiza la información</legend>
			
			<div class="error-message" id="error-message">
				<p id="error"></p>
			</div>
			
			<div class="icon">
				<input class="b-isbn" type='text' name='b_isbn' id="b_isbn" placeholder="Identificador de Producto" required />
			</div>
			
			<div class="icon">
				<input class="b-copies" type="number" name="b_copies" placeholder="Cantidad de Productos" required />
			</div>
			
			<input type="submit" name="b_add" value="Actualizar Datos" />
		</form>
		<form class="cd-form" method="POST" action="#">
			<legend>Eliminar</legend>
			
			<div class="error-message" id="error-message">
				<p id="error"></p>
			</div>
			
			<div class="icon">
				<input class="b-isbn" type='text' name='eliminar' id="b_isbn" placeholder="Numero de Identificador" required />
			</div>
			
			<input type="submit" name="b_eliminar" value="Eliminar" />
		</form>
		<center><a href="update_copies.php" ><h2>Refrescar</h2></a></center>
		
	</body>
	
	<?php
	require "visor.php";

		if(isset($_POST['b_add']))
		{

			$va1=$_POST['b_isbn'];
			$va2=$_POST['b_copies'];

			$con->query("UPDATE `almacen_db`.`productos` SET `cantidad` = $va2 WHERE (`id` = $va1)");
			$concat=($_POST['b_isbn']);
			echo('<center><h1>Valor Actualizado '.$concat.' con '.$va2.'</h1></center>');
		}
		if(isset($_POST['b_eliminar']))
		{

			$ba1=$_POST['eliminar'];

			$con->query("DELETE FROM `almacen_db`.`productos` WHERE (`id` = $ba1);			");
			echo('<center><h1>Se elimino '.$ba1.'</h1></center>');
		}
		
	?>
	

</html>