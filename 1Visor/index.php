<?php
	require "../db_connect.php";
	require "../message_display.php";
	require "../verify_logged_out.php";
	require "../header.php";
?>

<html>
	<head>
		<title>Ingreso de Miembro</title>
		<link rel="stylesheet" type="text/css" href="../css/EstiloGlobal.css">
		<link rel="stylesheet" type="text/css" href="css/EstilosVisor.css">
	</head>
	<body>
		<form class="cd-form" method="POST" action="#">
		
			<legend>Ingreso de Visitantes</legend>
			
			<div class="error-message" id="error-message">
				<p id="error"></p>
			</div>
			
			<div class="icon">
				<input class="m-user" type="text" name="m_user" placeholder="Usuario" required />
			</div>
			
			<div class="icon">
				<input class="m-pass" type="password" name="m_pass" placeholder="Contraseña" required />
			</div>
			
			<input type="submit" value="Ingresar" name="m_login"  onclick="location='https://sis104finalsf-23-production.up.railway.app/1Visor/home.php'"/>
			
			<br /><br /><br /><br />
			
			<p align="center">¿No tienes cuenta aún?&nbsp;<a href="register.php">Regístrate</a>
		</form>
	</body>
	
	<?php
	$type="ss";
	
		if(isset($_POST['m_login']))
		{
			$query = $con->prepare("SELECT id FROM visor WHERE username = ? AND password = ?;");
			$query->bind_param($type, $_POST['m_user'], $_POST['m_pass']); 
			$query->execute();
			$result = $query->get_result();
			
			if(mysqli_num_rows($result) != 1)
				echo error_without_field("Invalid username/password combination");
			else 
			{
				$resultRow = mysqli_fetch_array($result);

					echo error_without_field("Your account has been suspended. Please contact a librarian for further information");
					$_SESSION['type'] = "visor";
					$_SESSION['id'] = $resultRow[0];
					$_SESSION['username'] = $_POST['m_user'];
					header('Location: https://sis104finalsf-23-production.up.railway.app/1Visor/visor.php');
			}
		}
	?>
	
</html>
