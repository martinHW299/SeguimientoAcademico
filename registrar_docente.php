<?php
if(isset($_POST["Nombre"]) && isset($_POST["CI"]) && isset($_POST["Titulacion"]) && isset($_POST["Contrasena"])){
    include_once "funciones.php";
    include_once("funciones.php");
    // Create connection
    $conn = connectSQL();
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $nombre = $_POST["Nombre"];
    $CI = $_POST["CI"];
    $titulacion = $_POST["Titulacion"];
    $contrasenia = $_POST["Contrasena"];
    $query = "INSERT INTO docentes(Nombre, CI, Titulacion, CONTRASENA )
    values(\"" . $nombre . "\", \"" . $CI . "\", \"" . $titulacion . "\", \"" . $contrasenia . "\");";
    mysqli_query($conn, $query);
    mysqli_close($conn);
    echo "Funciona jaja";
}else{
    header("Location: index.php");
}
?>