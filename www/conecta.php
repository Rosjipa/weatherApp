<?php
@$conexion=mysql_connect('localhost','root','');
$db=mysql_select_db('u515964723_clim',$conexion);
 $SQL="SELECT * FROM temperatura WHERE id=(SELECT max(id) FROM temperatura)";
 $re=mysql_query($SQL,$conexion); 
echo "Temperatura: ".mysql_result($re,0,'valor')."</br>";
echo "Humedad: ".mysql_result($re,0,'valor1')."</br>";
echo "Luminosidad: ".mysql_result($re,0,'valor2')."</br>";
?> 