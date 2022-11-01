<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Estudiantes</title>
</head>

<body>
	<center>
	<?php
	$name= htmlentities($_COOKIE['user']);
	include_once("funciones.php");
	// Create connection
	$conn = connectSQL();
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$query = "SELECT id_docente FROM docentes where Nombre = \"" . $name. "\"";
	$result = $conn->query($query);
	$idDocente = $result->fetch_row()[0];
	$query = "SELECT * FROM materias WHERE id_docente = \"" . $idDocente . "\"";
	$result = $conn->query($query);
	$resultClone = $conn->query($query);

	/* fetch object array */
	$contador1 = 0;
	while($row = mysqli_fetch_row($resultClone)){
		$query = "SELECT * FROM parciales WHERE id_docente = " . $idDocente . " AND nombre_materia = \"$row[0]\" AND nombre_curso = \"$row[1]\"";
		$result1 = $conn->query($query);
		while($row1 = mysqli_fetch_row($result1)){
			setcookie('materias['. strval($contador1) . ']', $row1[4]);
			setcookie('estudiantes['. strval($contador1) . ']', $row1[3]);
			setcookie('docente', $idDocente);
			setcookie('curso[' . strval($contador1) . ']', $row1[5]);
			$contador1++;
		}
	}
	while ($row = mysqli_fetch_row($result)) {
		echo "<h2>Materia: " . $row[0] . "</h2>";
		echo "<h2>Curso: $row[1]</h2>";
		echo "<form method=\"post\" action=\"actualizar_notas.php\">";
		echo "
			<table>
			<tr>
		    <th>Estudiante</th>
		    <th>Primer Parcial</th>
		    <th>Segundo Parcial</th>
		    <th>Tercer Parcial</th>
		  </tr>";
		$query = "SELECT estudiantes.nombre, parciales.primer_parcial, parciales.segundo_parcial, parciales.tercer_parcial FROM parciales inner join estudiantes on parciales.id_estudiante = estudiantes.id_estudiante WHERE id_docente = " . $idDocente . " AND parciales.nombre_materia = \"$row[0]\"";
		$result1 = $conn->query($query);

		/* fetch object array */
		
		while ($row1 = mysqli_fetch_row($result1)) {
		    echo "<tr>";
		    echo "<td>" . $row1[0] . "</td>";
		    echo "<td>" . "<input type=\"number\" name=\"primerParcial[]\" value=" . $row1[1] . "></td>";
		    echo "<td>" . "<input type=\"number\" name=\"segundoParcial[]\" value=" . $row1[2] . "></td>";
		    echo "<td>" . "<input type=\"number\" name=\"tercerParcial[]\" value=" . $row1[3] . "></td>";
		    echo "</tr>";
		    
		}
		echo "</table>";
	}
	echo "<br><input type=\"submit\" name=\"Submit\"value=\"Guardar\">";
	echo "</form>";
	mysqli_close($conn);
	
?>
<br/>
<button><a href="index.php">Salir</a></button>

</center>
</body>
</html>

