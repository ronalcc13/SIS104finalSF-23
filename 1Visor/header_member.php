<html>
	<head>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700">
		<link rel="stylesheet" type="text/css" href="css/EstilosVisor.css" />
	</head>
	<body>
		<header>
			<div id="cd-logo">
				<img src="img/ic_logo.svg" alt="Logo" />
				<p>LIBRERÍA USFX vista Usuarios</p>

				<a href="../logout.php">||||||||||</a>
			</div>
			
			<div class="dropdown">
				<button class="dropbtn">
					<p id="librarian-name"><?php echo $_SESSION['username'] ?></p>
				</button>
				<div class="dropdown-content">
					<a href="../logout.php">Cerrar Sesión</a>
				</div>
			</div>
		</header>
	</body>
</html>