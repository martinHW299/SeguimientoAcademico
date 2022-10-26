<?php
include("inc\header.php");
?>

<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
	body{
		background-image: url("img/logo.jpg");
		position: center;
		background-repeat: no-repeat;
	}
	.form-register {

		width: 500px;
		background: #013FBB;
		padding: 30px;
		margin: auto;
		margin-right: 200px;
		margin-top: 100px;
		border-radius: 40px;
		font-family: 'calibri';
		color: white;
		box-shadow: 7px 13px 37px #000;
	}
	.form-register h4 {
		font-size: 22px;
		margin-bottom: 20px;
	}
	.controls {
		width: 100%;
		background: #A3B9BB;
		padding: 10px;
		border-radius: 4px;
		margin-bottom: 16px;
		border: 1px solid blue;
		font-family: 'calibri';
		font-size: 18px;
		color: white;
	}
	.form-register p {
		height: 40px;
		text-align: center;
		font-size: 18px;
		line-height: 40px;
	}
	.form-register a {
		color: white;
		text-decoration: none;
	}
	.form-register a:hover {
		color: white;
		text-decoration: underline;
	}
	.form-register .botons {
		width: 100%;
		background: #DAB616;
		border: none;
		padding: 12px;
		color: white;
		margin: 16px 0;
		font-size: 16px;
	}
	.form-register .botons:hover {
		width: 100%;
		background: #DAB616;
		border: none;
		padding: 12px;
		color: white;
		margin: 16px 0;
		font-size: 16px;
		border-radius: 100px;
	}

</style>

<body>
	<section class="form-register">
		<center>
		<h4>Registro Estudiantes</h4> 
	    </center>
		<form action="registro_estudiantes_bd.php" method="post">
			<input class="controls" type="text" name="nombre" placeholder="Nombre Estudiante">
			<input class="controls" type="number" name="ci" placeholder="CI">
			<input class="controls" type="text" name="fecha_nacimiento" placeholder="Fecha de nacimiento">
			<input class="controls" type="text" name="curso" placeholder="Curso"/>
			<input class="controls" type="password" name="contrasenia" placeholder="Clave de acceso">
			<input class="controls" type="submit" name="submit"/>
		</form>
	</section>
</body>
</html>