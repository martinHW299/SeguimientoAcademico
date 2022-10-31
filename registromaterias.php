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
	<form method="post" action="activar_materia.php">
	<section class="form-register">
		<center>
		<h4>Registro Materias</h4> 
	    </center>
		<input class="controls" type="text" name="materia" id="Materia" placeholder="Nombre Materia">
		<!-- <input class="controls" type="text" name="docente" id="docente" placeholder="Docente"> -->
		<select class="controls" name="docente">
			<?php
			include_once("funciones.php");
			// Create connection
			$conn = connectSQL();
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			$query = "SELECT * FROM DOCENTES";
			$result = ($conn->query($query));
			while($row = $result->fetch_row()){
				echo "<option value=". $row[0] . ">" . $row[1] . "</option>";
			}
			mysqli_close($conn);
			?>
	    </select>
		<input type="text" class="controls" name="curso" placeholder="Curso"/>
		<input class="botons" type="submit" value="Registrar Materia"/>
	</section>
</form>
</body>
</html>