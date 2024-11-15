<?php

include("conexion.php");

if(isset($_POST["register"])) {
    if(
        strlen($_POST["name"]) >=1 &&
        strlen($_POST["country"]) >=1 &&
        strlen($_POST["latitude"]) >=1 &&
        strlen($_POST["longitude"]) >=1 &&
        strlen($_POST["fishing"]) >=1 
       ) {
            $name = trim($_POST["name"]);
            $country = trim($_POST["country"]);
            $latitude = trim($_POST["latitude"]);
            $longitude = trim($_POST["longitud"]);
            $fishing = trim($_POST["fishing"]);
            $fecha = date("d/m/y");

        $consulta = "INSERT INTO mapa(nombre, pais, latitud, longitud, pesca, fecha)
            VALUES('$name', '$country', '$latitude', '$longitude', '$fishing', '$fecha')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado)  {
            ?>
                <h3 class ="success">Registro Completado</h3>
            <?php
            } else {
            ?>
                <h3 class ="error">Presenta Error</h3>
            <?php                
        }   
        
    }
}