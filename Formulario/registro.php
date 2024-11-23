
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consulta db</title>
    <style type="text/css">
     
      table {
        border: solid 2px #7e7c7c;
        border-collapse: collapse;
                     
      }
     
      th, h1 {
        background-color: #edf797;
      }

      td,
      th {
        border: solid 1px #7e7c7c;
        padding: 2px;
        text-align: center;
      }


    </style>
</head>
<body>
    
</body>
</html>


<?php
$server="localhost";
$user="root";
$pass="";
$db="proyectofinal";

//conetamos al base datos
$connection = new mysqli($server,$user,$pass,$db);

//hacemos llamado al imput de formuario
$Nombre = $_POST["Nombre"] ;
$Pais = $_POST["Pais"] ;
$Latitud = $_POST["Latitud"] ;
$Longitud = $_POST["Longitud"] ;
$Cantidad_Pesca = $_POST["Pesca"] ;

//verificamos la conexion a base datos
if($connection) 
        {
            echo "No se ha podido conectar con el servidor" . mysqli_error($connection);
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "mapa";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "INSERT INTO mapa(Nombre, Pais, Latitud, Longitud, Pesca)
                             VALUES ('$Nombre','$Pais','$Latitud','$Longitud','$Cantidad_Pesca')";
                           
                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM mapa";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<table>";
echo "<tr>";
echo "<th><h1>id</th></h1>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>Pais</th></h1>";
echo "<th><h1>Latitud</th></h1>";
echo "<th><h1>Longitud</th></h1>";
echo "<th><h1>Pesca</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['id']. "</td></h2>";
    echo "<td><h2>" . $colum['Nombre']. "</td></h2>";
    echo "<td><h2>" . $colum['Pais'] . "</td></h2>";
    echo "<td><h2>" . $colum['Latitud'] . "</td></h2>";
    echo "<td><h2>" . $colum['Longitud'] . "</td></h2>";
    echo "<td><h2>" . $colum['Pesca'] . "</td></h2>";
    echo "</tr>";
}
echo "</table>";

mysqli_close( $connection );

   //echo "Fuera " ;
   echo'<a href="index.html"> Volver Atrás</a>';


?>

<?php?>