<?php
include "cone.php";

date_default_timezone_set("America/Bogota");
$fechaa=date('Y-m-d', strtotime('-1 day'));
$SQL = "SELECT * FROM temperatura WHERE timestamp='$fechaa'";
$res = mysql_query($SQL, $serve);

$fechaa1=date('Y-m-d', strtotime('-2 day'));
$SQL1 = "SELECT * FROM temperatura WHERE timestamp='$fechaa1'";
$res1 = mysql_query($SQL1, $serve);

$fechaa2=date('Y-m-d', strtotime('-3 day'));
$SQL2 = "SELECT * FROM temperatura WHERE timestamp='$fechaa2'";
$res2 = mysql_query($SQL2, $serve);

?> 
<form action="" method="get">
  <table width="355" border="0" align="center">
    <tr>
      <td width="120"><?php
          
         $t1=mysql_result($res,0,'valor');
           if($t1>=15)
 {
     echo "<img src='img/soleado.PNG' width='110' height='110' style=' border-radius:20px '>"."</br>";
     echo "Soleado";
 }
          else if($t1<15)
               {
     echo "<img src='img/Nublado.PNG' width='110' height='110' style=' border-radius:20px '>"."</br>";
     echo "Nublado";
 }
          
          ?></td>
      <td width="140"><?php
          
         $t2=mysql_result($res1,0,'valor');
           if($t2>=15)
 {
     echo "<img src='img/soleado.PNG' width='110' height='110' style=' border-radius:20px '>"."</br>";
     echo "Soleado";
 }
             else if($t2<15)
               {
     echo "<img src='img/Nublado.PNG' width='110' height='110' style=' border-radius:20px '>"."</br>";
     echo "Nublado";
 }
                
          ?></td>
      <td width="100"><?php
          
         $t3=mysql_result($res2,0,'valor');
           if($t3>=15)
 {
     echo "<img src='img/soleado.PNG' width='110' height='110' style=' border-radius:20px '>"."</br>";
     echo "Soleado";
 }
          
          ?></td>
    </tr>
    <tr>
      <td><?php
echo $fechaa."</br>";
echo "Temper: ".mysql_result($res,0,'valor')."°C"."</br>";
echo "Humedad: ".mysql_result($res,0,'valor1')."%"."</br>";
	   ?></td>
        
      <td><?php 
echo $fechaa1."</br>";
echo "Temper: ".mysql_result($res1,0,'valor')."°C"."</br>";
echo "Humedad: ".mysql_result($res1,0,'valor1')."%"."</br>";
	  ?></td>
        
      <td><?php 
echo $fechaa2."</br>";
echo "Temper: ".mysql_result($res2,0,'valor')."°C"."</br>";
echo "Humedad: ".mysql_result($res2,0,'valor1')."%"."</br>";
	  ?></td>
    </tr>
  </table>
</form>