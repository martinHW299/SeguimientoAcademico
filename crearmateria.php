<?php
// Create connection
//$conn = connectSQL();
// Check connection
//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//}
include_once("funciones.php");
include_once("insertarmateria.php");
?>

<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?php echo $title; ?></title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<body>
<div class="header">
   <center><h1>Crear materia</h1></center>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<form method="POST" class="p-3">
   <div class="p-3">
      <label for="exampleFormControlInput1" class="form-label">Materia:</label>
      <input type="text" name="nombremateria" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la materia">
   </div>
   <div class="p-3">
      <!--
         Hay que ver la opcion de poder hacer una tabla curso para poder llamar a la misma y no tener que tocar el codigo.
      -->
      <label for="exampleFormControlInput1" class="form-label">Seleccionar cursos que toman la materia:</label><br>
      <input class="form-check-input" type="checkbox" name="cursos" value="6to. Sec" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">6to. Sec</label><br>
      <input class="form-check-input" type="checkbox" name="cursos" value="5to. Sec" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">5to. Sec</label><br>
      <input class="form-check-input" type="checkbox" name="cursos" value="4to. Sec" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">4to. Sec</label><br>
      <input class="form-check-input" type="checkbox" name="cursos" value="3to. Sec" id="defaultCheck1">
      <label class="form-check-label" for="defaultCheck1">3to. Sec</label><br>
   </div>
   <div class="input-group p-3">
        <label class="input-group-text" for="inputGroupSelect01">Docente encargado:</label>
        <select name="docente" class="form-select" id="inputGroupSelect01">
         <?php 
            //necesito de la conexion a la base de datos.
            //muestra en un dropdown nombre de los docentes para asignar en la materia
            //funcion listarDocente desde funciones.php
               foreach (listarDocentes($conn) as $key => $value) {
                  echo "<option value=\"$key\">$value</option>";
               }
         ?>        
        </select>
   </div><br>
   <input type="submit" name="crearmateria" class="btn btn-primary" value="Crear Materia">
</form>
