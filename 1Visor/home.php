<?php
	require "../db_connect.php";
	require "verify_member.php";
	require "header_member.php";
?>

<html>
	<head>
		<title>Bienvenido</title>
		<link rel="stylesheet" type="text/css" href="../css/EstiloGlobal.css">
		<link rel="stylesheet" type="text/css" href="css/EstilosVisor.css">
	</head>
	<body>
	<?php
			$query = $con->prepare("SELECT * FROM productos ORDER BY id");
			$query->execute();
			$result = $query->get_result();
			if(!$result)
				die("ERROR: Couldn't fetch books");
			$rows = mysqli_num_rows($result);
			if($rows == 0)
				echo "<h2 align='center'>No Existen Productos</h2>";
			else
			{
				echo "<form class='cd-form' method='POST' action='#'>";
				echo "<legend>Productos disponibles</legend>";
				echo "<div class='error-message' id='error-message'>
						<p id='error'></p>
					</div>";
				echo "<table width='100%' cellpadding=10 cellspacing=10>";
				echo "<tr>
						<th></th>
						<th>N° de Lista<hr></th>
						<th>Codigo de Serie<hr></th>
						<th>Nombre de Producto<hr></th>
						<th>Creacion<hr></th>
						<th>Vencimiento<hr></th>
						
						<th>Precio BS<hr></th>
						<th>Cantidad<hr></th>
					</tr>";
				for($i=0; $i<$rows; $i++)
				{
					$row = mysqli_fetch_array($result);
					echo "<tr>
							<td>
								<label class='control control--radio'>
									<input type='radio' name='rd_book' value=".$row[0]." />
								<div class='control__indicator'></div>
							</td>";
					for($j=0; $j<7; $j++)
						if($j == 6)
							echo "<td>".$row[$j]."</td>";
						else
							echo "<td>".$row[$j]."</td>";
					echo "</tr>";
				}
				echo "</table>";
				echo "</form>";
			}
	?>
	</body>
</html>