<?php

include "conectabd.php";

     $SQL = "SELECT * FROM temperatura WHERE id=(
    SELECT max(id) FROM temperatura)";

     $re = mysql_query($SQL, $serve);
 
$temp=mysql_result($re,0,'valor');
if($temp>17)
{
echo "<img src='img/soleadoo.png' width='300' height='300' style='border-radius:20px'><br>";
}
else
{
	if($temp<=17 and $temp>=13)
	  echo "<img src='img/parnubladoo.png' width='300' height='320' style='border-radius:20px'><br>";
	if($temp<13)
	  echo "<img src='img/nubladoo.png' width='300' height='320' style='border-radius:20px'><br>";
}
echo "Temperatura: ".mysql_result($re,0,'valor')."°C"."</br>";
echo "Humedad: ".mysql_result($re,0,'valor1')."%"."</br>";
echo "Luminosidad: ".mysql_result($re,0,'valor2')."</br>";
?> 