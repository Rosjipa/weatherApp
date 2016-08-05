<?php

include "conectabd.php";

     $SQL = "SELECT * FROM temperatura WHERE id=(
    SELECT max(id) FROM temperatura)";

     $re = mysql_query($SQL, $serve);
 
$t=mysql_result($re,0,'valor');
if($t>=15)
{
 echo "<img src='img/soleadoo.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Soleado"."</br>";    
}
echo "Temperatura: ".mysql_result($re,0,'valor')."°C"."</br>";
echo "Humedad: ".mysql_result($re,0,'valor1')."%"."</br>";
echo "Luminosidad: ".mysql_result($re,0,'valor2')."</br>";


?> 