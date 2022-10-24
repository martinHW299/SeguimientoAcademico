<?php
	include_once("inc/head.php");
?>
<div id="administrador">
<form method="post" action="activar_materia.php">
	<br><label>Nombre de materia</label><br>
	<input type="text" name="materia"><br>
	<label>Estudiantes</label><br>
<?php
	include_once("inc/head.php");
	include_once("funciones.php");
	$mysqli = connectSQL();

	$query = "SELECT * FROM ESTUDIANTES";

	$result = $mysqli->query($query);

	/* fetch object array */
	while ($row = $result->fetch_row()) {
	    echo "<label><input type=\"checkbox\" name=\"estudiante[]\" value=" . $row[0] . ">";
	    echo $row[1] . "</label><br><br>\n";
	}
	mysqli_close($mysqli);
?>
	<input type="submit" name="Submit"value="Ingresar"><br><br>
</form>
</div>
<?php
	include_once("inc/foot.php");
?>