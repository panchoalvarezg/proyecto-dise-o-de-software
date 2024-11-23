<?php
require("db.php");

function parseToXML($htmlStr)
{
$xmlStr=str_replace('<','&lt;',$htmlStr);
$xmlStr=str_replace('>','&gt;',$xmlStr);
$xmlStr=str_replace('"','&quot;',$xmlStr);
$xmlStr=str_replace("'",'&#39;',$xmlStr);
$xmlStr=str_replace("&",'&amp;',$xmlStr);
return $xmlStr;
}


$query = "SELECT * FROM mapa;";
$result = mysqli_query($conn,$query);
if (!$result) {
  die('Invalidproyecto query: ' . mysqli_error($conn));
}

header("Content-type: text/xml");


echo "<?xml version='1.0' ?>";
echo '<markers>';
$ind=0;

while ($row = @mysqli_fetch_assoc($result)){

  echo '<marker ';
  echo 'idmapa="' . $row['idmapa'] . '" ';
  echo 'Nombre="' . $row['Nombre'] . '" ';
  echo 'Pais="' . $row['Pais'] . '" ';
  echo 'Latitud="' . $row['Latitud'] . '" ';
  echo 'Longitud="' . $row['Longitud'] . '" ';
  echo '/>';
  $ind = $ind + 1;
}


echo '</markers>';

?>
