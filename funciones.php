<?php 
	function connectSQL(){
		$servername = "localhost";
		$database = "academico";
		$username = "root";
		$password = "pbbs1959";
		// Create connection
		$conn = mysqli_connect($servername, $username, $password, $database);
		return $conn;
	}
?>