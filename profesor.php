<?php
	include_once("inc/head.php");
	include_once("funciones.php");
	$name= htmlentities($_COOKIE['user']);

	// Create connection
	$conn = connectSQL();
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$query = "SELECT idDocente FROM Docente where Nombre = \"" . $name. "\"";
	$result = $conn->query($query);
	$idDocente = $result->fetch_row()[0];
	$query = "SELECT * FROM materias WHERE idDocente = \"" . $idDocente . "\"";
	$result = $conn->query($query);
	$resultClone = $conn->query($query);

	/* fetch object array */
	$contador1 = 0;
	while($row = mysqli_fetch_row($resultClone)){
		$query = "SELECT * FROM parciales WHERE idMATERIA = \"" . $row[0] . "\"";
		$result1 = $conn->query($query);
		while($row1 = mysqli_fetch_row($result1)){
			setcookie('materias['. strval($contador1) . ']', $row[0]);
			setcookie('estudiantes['. strval($contador1) . ']', $row1[0]);
			$contador1++;
		}
	}
	while ($row = mysqli_fetch_row($result)) {
		echo "<h2>" . $row[1] . "</h2>";
		echo "<form method=\"post\" action=\"actualizar_notas.php\">";
		echo "<table>";
		echo "
			<tr>
		    <th>Estudiante</th>
		    <th>Primer Parcial</th>
		    <th>Segundo Parcial</th>
		    <th>Tercer Parcial</th>
		  </tr>";
		$query = "SELECT * FROM parciales WHERE idMATERIA = \"" . $row[0] . "\"";
		$result1 = $conn->query($query);

		/* fetch object array */
		
		while ($row1 = mysqli_fetch_row($result1)) {
			
		    
			$query = "SELECT NOMBRE FROM estudiantes WHERE idESTUDIANTE = \"" . $row1[0] . "\"";
			$resultado = $conn->query($query);
			$estudiante = $resultado->fetch_row()[0];
		    echo "<tr>";
		    echo "<td>" . $estudiante . "</td>";
		    echo "<td>" . "<input type=\"number\" name=\"primerParcial[]\" value=" . $row1[2] . "></td>";
		    echo "<td>" . "<input type=\"number\" name=\"segundoParcial[]\" value=" . $row1[3] . "></td>";
		    echo "<td>" . "<input type=\"number\" name=\"tercerParcial[]\" value=" . $row1[4] . "></td>";
		    echo "</tr>";
		    
		}
		echo "</table>";
	}
	echo "<br><input type=\"submit\" name=\"Submit\"value=\"Guardar\">";
	echo "</form>";
	mysqli_close($conn);
?>

<?php
	include_once("inc/foot.php");
?>