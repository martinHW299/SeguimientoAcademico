<?php
	include_once("funciones.php");
	// Create connection
	$conn = connectSQL();
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}
	setcookie('user',$_POST['username']);
	$username;
	$password;


	if(!isset($_POST['entity']) or !isset($_POST['username']) or !isset($_POST['password'])){
		header("Location: index.php");
	}else{
		$username = htmlentities($_POST['username']);
		$password = htmlentities($_POST['password']);
	}

	if($_POST['entity'] == "estudiante"){
		$query = "SELECT password from estudiantes where NOMBRE = \"" . $username . "\"";
		$result = ($conn->query($query))->fetch_row();

		if($result[0] == $password){
			header("Location: estudiante.php");
		}else{
			header("Location: index.php");
		}
	}elseif ($_POST['entity'] == "profesor") {
		$query = "SELECT password from docente where Nombre = \"" . $username . "\"";
		$result = ($conn->query($query))->fetch_row();

		if($result[0] == $password){
			header("Location: profesor.php");
		}else{
			header("Location: index.php");
		}
	}elseif ($_POST['entity'] == "adminsitrador") {
		$query = "SELECT password from administradores where Nombre = \"" . $username . "\"";
		$result = ($conn->query($query))->fetch_row();

		if($result[0] == $password){
			header("Location: administrador.php");
		}else{
			header("Location: index.php");
		}
	}else{
		header("Location: index.php");
	}
?>