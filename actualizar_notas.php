<?php 
	if (isset($_COOKIE['materias']) and isset($_COOKIE['estudiantes']) and isset($_POST['primerParcial']) and isset($_POST['segundoParcial']) and isset($_POST['tercerParcial'])) {
		include_once("funciones.php");
		// Create connection
		$conn = connectSQL();
		// Check connection
		if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		for($i = 0; $i < sizeof($_COOKIE['materias']); $i++){
			$primerParcial = htmlentities($_POST['primerParcial'][$i]);
			$segundoParcial = htmlentities($_POST['segundoParcial'][$i]);
			$tercerParcial = htmlentities($_POST['tercerParcial'][$i]);
			$query =
				"UPDATE parciales
				SET primerParcial = " . $primerParcial .
				", segundoParcial = ". $segundoParcial .
				", tercerParcial = " . $tercerParcial .
				" WHERE idESTUDIANTE = " . $_COOKIE['estudiantes'][$i].
				" AND idMATERIA = " . $_COOKIE['materias'][$i];
			mysqli_query($conn, $query);
			mysqli_close($conn);
		}
	}
	header("Location: index.php");
?>