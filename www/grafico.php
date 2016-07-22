<?php
include "cone.php";
date_default_timezone_set("America/Bogota");
$fecha=date("Y/m/d");
$SQL = "SELECT * FROM temperatura WHERE timestamp='$fecha'";

     $re = mysql_query($SQL, $serve);
 

$t=mysql_result($re,0,'valor')."</br>";
 if($t>=15)
 {
     echo "<img src='img/soleado.PNG' width='110' height='110' style=' border-radius:20px '>"."</br>";
     echo "Soleado";
 }

?>