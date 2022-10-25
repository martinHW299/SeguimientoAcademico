<?php
    if(!(isset($_POST["Materia"]) && isset($_POST["codigo_estudiante"]))){
        header("location: asignar.html");
    }else{
        include_once("funciones.php");
        // Create connection
	    $conn = connectSQL();
	    // Check connection
	    if (!$conn) {
	        die("Connection failed: " . mysqli_connect_error());
	    }

        $query = "SELECT idMATERIA from MATERIAS where MATERIA = \"" . $materia . "\"";
		$result = $conn->query($query);
		$row = $result->fetch_row();
        $materia = $row[0];
        $estudiante = $_POST["codigo_estudiante"];
        $query = "INSERT INTO parciales (PRIMER_PARCIAL, SEGUNDO_PARCIAL, TERCER_PARCIAL, ID_ESTUDIANTE, ID_MATERIA)VALUES(0, 0, 0, " . $estudiante . ", " . $materia . ")";
        mysqli_close($conn);
    }
?>