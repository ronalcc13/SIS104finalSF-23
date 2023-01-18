<?php
	require "db_connect.php";
	require "header-index.php";
	session_start();
	
	if(empty($_SESSION['type']));
	else if(strcmp($_SESSION['type'], "admin") == 0)
		header("Location: librarian/home.php");
	else if(strcmp($_SESSION['type'], "visor") == 0)
		header("Location: member/home.php");
?>

<html>
	<head>
		<title>Tu Biblioteca USFX</title>
		<link rel="stylesheet" type="text/css" href="css/index_style.css" />
	</head>
	<body>
		<div id="allTheThings">
			<div id="member">
				<a href="1Visor">
					<img src="img/ic_member.svg" width="250px" height="auto"/><br />
					&nbsp;Miembro
				</a>
			</div>
			<div id="verticalLine">
				<div id="librarian">
					<a  href="0Admin">
					<img src="img/ic_member.svg" width="250px" height="auto" /><br />
					&nbsp;&nbsp;&nbsp;Administración
					</a>
				</div>
			</div>
		</div>
	</body>
</html>