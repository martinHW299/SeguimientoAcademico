<?php 
	if (isset($_COOKIE['materias']) and isset($_COOKIE['estudiantes']) and isset($_POST['primerParcial']) and isset($_POST['segundoParcial']) and isset($_POST['tercerParcial'])) {
		for($i = 0; $i < sizeof($_COOKIE['materias']); $i++){
			include_once("funciones.php");
			// Create connection
			$conn = connectSQL();
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$primerParcial = htmlentities($_POST['primerParcial'][$i]);
			$segundoParcial = htmlentities($_POST['segundoParcial'][$i]);
			$tercerParcial = htmlentities($_POST['tercerParcial'][$i]);
			$query =
				"UPDATE parciales
				SET primer_parcial = $primerParcial, 
				segundo_parcial = $segundoParcial, 
				tercer_parcial = $tercerParcial 
				WHERE id_estudiante = " . $_COOKIE['estudiantes'][$i] . " AND nombre_materia = \"" . $_COOKIE['materias'][$i] . "\" AND nombre_curso = \"" . $_COOKIE['curso'][$i] . "\" AND id_docente = " . $_COOKIE['docente'] . ";";
			mysqli_query($conn, $query);
			mysqli_close($conn);
		}
	}
	header("Location: VerEstudiantes.php");
?>