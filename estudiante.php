<?php
	include_once("inc/head.php");
?>
<center>
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

	$str = "SELECT id_estudiante FROM estudiantes where NOMBRE = \"" . $name. "\"";
	$res = $mysqli->query($str);
	$idEstudiante = $res->fetch_row()[0];

	$query = "SELECT * FROM parciales WHERE id_estudiante = " . $idEstudiante;
	$result = $mysqli->query($query);

	/* fetch object array */
	while ($row = mysqli_fetch_row($result)) {
	    echo "<tr>";
	    echo "<td>" . $row[4] . "</td>";
	    echo "<td>" . $row[0] . "</td>";
	    echo "<td>" . $row[1] . "</td>";
	    echo "<td>" . $row[2] . "</td>";
	    echo "<td>" . ($row[0]+$row[1]+$row[2])/3 . "</td>";
	    echo "</tr>";
	}
	mysqli_close($mysqli);
	echo "</table><br>";
	echo "<button><a href=\"index.php\">Salir</a></button></center>";
	include_once("inc/foot.php");
?>	