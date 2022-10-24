<?php
	include_once("inc/head.php");
?>

<table>
  <tr>
    <th>Materia</th>
    <th>Primer Parcial</th>
    <th>Segundo Parcial</th>
    <th>Tercer Parcial</th>
    <th>Promedio</th>
  </tr>

<?php 
	include_once "funciones.php";
	$name= htmlentities($_COOKIE['user']);
	$mysqli = connectSQL();

	$str = "SELECT idESTUDIANTE FROM estudiantes where NOMBRE = \"" . $name. "\"";
	$res = $mysqli->query($str);
	$idEstudiante = $res->fetch_row()[0];

	$query = "SELECT * FROM parciales WHERE idESTUDIANTE = \"" . $idEstudiante . "\"";
	$result = $mysqli->query($query);

	/* fetch object array */
	while ($row = mysqli_fetch_row($result)) {
		$query = "SELECT MATERIA FROM materias WHERE idMATERIA = \"" . $row[1] . "\"";
		$resultado = $mysqli->query($query);
		$materia = $resultado->fetch_row()[0];
	    echo "<tr>";
	    echo "<td>" . $materia . "</td>";
	    echo "<td>" . $row[2] . "</td>";
	    echo "<td>" . $row[3] . "</td>";
	    echo "<td>" . $row[4] . "</td>";
	    echo "<td>" . ($row[2]+$row[3]+$row[4])/3 . "</td>";
	    echo "</tr>";
	}
	mysqli_close($mysqli);
	echo "</table>";
	include_once("inc/foot.php");
?>	