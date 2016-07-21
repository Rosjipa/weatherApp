<?php
$serve = mysql_connect('localhost','root','');
if(!$serve){ echo 'error';}
$db = mysql_select_db('u515964723_clim', $serve);

     $SQL = "SELECT * FROM temperatura WHERE id=(
    SELECT max(id) FROM temperatura)";

     $re = mysql_query($SQL, $serve);
 
echo "Temperatura: ".mysql_result($re,0,'valor')."</br>";
echo "Humedad: ".mysql_result($re,0,'valor1')."</br>";
echo "Luminosidad: ".mysql_result($re,0,'valor2')."</br>";
?> 