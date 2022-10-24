<?php 
	include_once("inc/head.php");
	include_once("funciones.php");
	// Create connection
	$conn = connectSQL();
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	if(isset($_POST["estudiante"]) and isset($_POST["materia"])){
		$materia = htmlentities($_POST['materia']);
		foreach ($_POST['estudiante'] as $estudiante) {
			$query = "SELECT idMATERIA from MATERIAS where MATERIA = \"" . $materia . "\"";
			$result = $conn->query($query);
			$row = $result->fetch_row();
			$query = "INSERT INTO parciales (idESTUDIANTE, idMATERIA, primerParcial, segundoParcial, tercerParcial)VALUES(" . $estudiante . ", " . $row[0] . ", 0, 0, 0)";
			mysqli_query($conn, $query);
		}
	}
	mysqli_close($conn);
	header("Location: index.php");
?>