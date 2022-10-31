<?php 
	include_once("inc/head.php");
	include_once("funciones.php");
	// Create connection
	$conn = connectSQL();
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	if(isset($_POST["docente"]) and isset($_POST["materia"]) and isset($_POST["curso"])){
		$materia = htmlentities($_POST['materia']);
		$docente = htmlentities($_POST["docente"]);
		$curso = htmlentities($_POST["curso"]);
		$query = "SELECT ID_ESTUDIANTE FROM ESTUDIANTES WHERE CURSO = \"$curso\"";
		$result = ($conn->query($query));
		while($row = $result->fetch_row()){
			$query = "INSERT INTO parciales (primer_parcial, segundo_parcial, tercer_parcial, id_estudiante, nombre_materia, nombre_curso, id_docente)VALUES(0, 0, 0, $row[0], \"$materia\", \"$curso\", $docente)";
			mysqli_query($conn, $query);
		}
		$query = "INSERT INTO materias(NOMBRE, NOMBRE_CURSO, ID_DOCENTE) VALUES(\"$materia\", \"$curso\", $docente)";
		mysqli_query($conn, $query);
	}
	mysqli_close($conn);
	header("Location: registromaterias.php");
?>