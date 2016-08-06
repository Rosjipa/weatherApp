<?php

include "conectabd.php";

     $SQL = "SELECT * FROM temperatura WHERE id=(
    SELECT max(id) FROM temperatura)";

     $re = mysql_query($SQL, $serve);
 
$t=mysql_result($re,0,'valor');
if($t>17)
{
 echo "<img src='img/soleadoo.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Soleado"."</br>";    

echo "Temperatura: ".mysql_result($re,0,'valor')."°C"."</br>";
echo "Humedad: ".mysql_result($re,0,'valor1')."%"."</br>";
echo "Luminosidad: ".mysql_result($re,0,'valor2')."</br>";
}
else if($t>=13 and $t<=17)
   {
 echo "<img src='img/parnubladoo.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Parcilmente Soleado"."</br>";    

echo "Temperatura: ".mysql_result($re,0,'valor')."°C"."</br>";
echo "Humedad: ".mysql_result($re,0,'valor1')."%"."</br>";
echo "Luminosidad: ".mysql_result($re,0,'valor2')."</br>";
} 
else if($t<13)
   {
 echo "<img src='img/nubladoo.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Nublado"."</br>";    

echo "Temperatura: ".mysql_result($re,0,'valor')."°C"."</br>";
echo "Humedad: ".mysql_result($re,0,'valor1')."%"."</br>";
echo "Luminosidad: ".mysql_result($re,0,'valor2')."</br>";
} 

?> 