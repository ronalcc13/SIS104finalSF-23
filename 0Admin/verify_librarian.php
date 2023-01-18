<?php
	session_start();
	
	if(empty($_SESSION['type']))
		header("Location: ..");
	
	else if(strcmp($_SESSION['type'], "visor") == 0 )
		header("Location: ../1Visor/home.php");

?>