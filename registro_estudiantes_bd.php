<?php
    if(!(isset($_POST["nombre"]) && isset($_POST["ci"]) && isset($_POST["fecha_nacimiento"]) && isset($_POST["curso"]) && isset($_POST["contrasenia"]))){
        header("location: registroestudiantes.php");
    }else{
        $nombre = $_POST["nombre"];
        $ci = $_POST["ci"];
        $curso = $_POST["curso"];
        $contrasenia=$_POST["contrasenia"];
        $nacimiento=$_POST["fecha_nacimiento"];

        include_once("funciones.php");
        // Create connection
        $conn = connectSQL();
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $query = "INSERT INTO estudiantes(NOMBRE, CI, CURSO, CONTRASENA, NACIMIENTO)
        values(\"" . $nombre . "\", " . $ci . ", \"" . $curso . "\", \"" . $contrasenia . "\", \"" . $nacimiento . "\");";
        mysqli_query($conn, $query);
        mysqli_close($conn);
        header("location: index.php");
    }
?>