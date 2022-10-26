<?php
if(isset($_POST["nombremateria"]) && isset($_POST["cursos"]) && isset($_POST["docente"])){
    
    $materia = $_POST["nombremateria"];
    $curso = $_POST["cursos"];
    $docente = $_POST["docente"];
    $query = "INSERT INTO MATERIAS (NOMBRE_MATERIA, NOMBRE_CURSO, idDOCENTE) VALUES ('$materia, '$curso', '$docente')";
    mysqli_query($conn, $query);
}else{
    echo "Debe llenar todos los datos";
}
?>