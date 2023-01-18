<?php
	require "../db_connect.php";
	require "../header.php";
?>

<html>
	<head>
		<title>Registro</title>
		<link rel="stylesheet" type="text/css" href="../css/EstiloGlobal.css">
		<link rel="stylesheet" type="text/css" href="css/EstilosVisor.css">
	</head>
	<body>
		<form class="cd-form" method="POST" action="#">
			<legend>Ingresa tu información</legend>
			
				<div class="error-message" id="error-message">
					<p id="error"></p>
				</div>
				
				<div class="icon">
					<h1>USUARIO</h1>
					<input class="m-user" type="text" name="m_user" id="m_user" placeholder="Usuario" required />
				</div>
				
				<div class="icon">
					<h1>CONTRASEÑA</h1>
					<input class="m-pass" type="password" name="m_pass" placeholder="Contraseña" required />
				</div>
				
				<div class="icon">
					<h1>Nombre Completo</h1>
					<input class="m-name" type="text" name="m_name" placeholder="Nombre Completo" required />
				</div>
				

				
				<br />
				<input type="submit" name="m_register" value="Registrarse" />
		</form>
		
	</body>
	<center><a href="home.php" /><h1>Volver Atras</h1></a></center>
	<?php	
		if(isset($_POST['m_register'])){
			
			
			$UerX=$_POST['m_user'];
			$PassX=$_POST['m_pass'];
			$NameX=$_POST['m_name'];
			echo('<center><a href="home.php" /><h1>Registrado con Exito ver Productos : '.$UerX.'</h1></a></center>');
		$con->query("INSERT INTO `visor`() VALUES ('','$UerX', '$PassX','$NameX')");

		}
		
	?>
	
</html>