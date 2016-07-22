<?php
include "cone.php";


date_default_timezone_set("America/Bogota");


?> 
<form action="" method="get">
  <table width="355" border="0" align="center">
    <tr>
      <td width="120">&nbsp;</td>
      <td width="140">&nbsp;</td>
      <td width="100">&nbsp;</td>
    </tr>
    <tr>
      <td><?php
	  $fechaa=date('Y-m-d', strtotime('-1 day'));
$SQL = "SELECT * FROM temperatura WHERE timestamp='$fechaa'";
$res = mysql_query($SQL, $serve);
echo $fechaa."</br>";
echo "Temper: ".mysql_result($res,0,'valor')."°C"."</br>";
echo "Humedad: ".mysql_result($res,0,'valor1')."%"."</br>";
	   ?></td>
        
      <td><?php 
	  $fechaa1=date('Y-m-d', strtotime('-2 day'));
$SQL1 = "SELECT * FROM temperatura WHERE timestamp='$fechaa1'";
$res1 = mysql_query($SQL1, $serve);
echo $fechaa1."</br>";
echo "Temper: ".mysql_result($res1,0,'valor')."°C"."</br>";
echo "Humedad: ".mysql_result($res1,0,'valor1')."%"."</br>";
	  ?></td>
        
      <td><?php 
	  $fechaa2=date('Y-m-d', strtotime('-3 day'));
$SQL2 = "SELECT * FROM temperatura WHERE timestamp='$fechaa2'";
$res2 = mysql_query($SQL2, $serve);
echo $fechaa2."</br>";
echo "Temper: ".mysql_result($res2,0,'valor')."°C"."</br>";
echo "Humedad: ".mysql_result($res2,0,'valor1')."%"."</br>";
	  ?></td>
    </tr>
  </table>
</form>