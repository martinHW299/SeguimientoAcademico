<?php 
	include_once("inc/head.php");
?>
<center><div class="login">
	<form method="post" action="procesar.php">
		<div class="inputTxt">
			<br>
			<label>Nombre de usuario</label><br>
			<input type="text" name="username"><br><br>
			<label>Contraseña</label><br>
			<input type="password" name="password"><br><br>
		</div>
		<div class="entities">
			<label>Estudiante</label>
			<input type="radio" name="entity" value="estudiante">
			<label>Profesor</label>
			<input type="radio" name="entity" value="profesor">
			<label>Administrador</label>
			<input type="radio" name="entity" value="adminsitrador"><br><br>
			<input type="submit" name="Submit"value="Ingresar">
		</div>
	</form>
</div></center>

<?php 
	include_once("inc/foot.php");
?>