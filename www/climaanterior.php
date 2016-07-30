<?php

include "conectabd.php";
$ayer1= date('Y-m-d', strtotime('-1 day'));
$ayer2= date('Y-m-d', strtotime('-2 day'));
$ayer3= date('Y-m-d', strtotime('-3 day'));

    $SQL1 = "SELECT * FROM temperatura WHERE timestamp='$ayer1' ";
    $SQL2 = "SELECT * FROM temperatura WHERE timestamp='$ayer2' ";
    $SQL3 = "SELECT * FROM temperatura WHERE timestamp='$ayer3' ";

     $re1 = mysql_query($SQL1, $serve);
     $re2 = mysql_query($SQL2, $serve);
     $re3 = mysql_query($SQL3, $serve);
 
?> 
<form id="form1" name="form1" method="post" action="">
   <center>
   <table width="300" border="0">
    <tr>
      <td width="100"><?php
$t=mysql_result($re1,0,'valor');
if($t>=15)
{
 echo "<img src='img/soleadoo.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Soleado"."</br>";    
}
else if ($t>10 and $t<15)
{
 echo "<img src='img/nubladoo.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Nublado"."</br>";    
} 
else if ($t<10)
{
 echo "<img src='img/llovisnaa.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Llovisna"."</br>";    
}           
echo "$ayer1"."</br>";
echo "Tem: ".mysql_result($re1,0,'valor')." °C"."</br>";
echo "Hum: ".mysql_result($re1,0,'valor1')."%"."</br>";
          ?></td>
      <td width="100"><?php
          $t1=mysql_result($re2,0,'valor');
if($t1>=15)
{
 echo "<img src='img/soleadoo.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Soleado"."</br>";    
}
else if ($t1>10 and $t1<15)
{
 echo "<img src='img/nubladoo.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Nublado"."</br>";    
} 
else if ($t1<10)
{
 echo "<img src='img/llovisnaa.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Llovisna"."</br>";    
}           
echo "$ayer2"."</br>";
echo "Temp: ".mysql_result($re2,0,'valor')." °C"."</br>";
echo "Hum: ".mysql_result($re2,0,'valor1')."%"."</br>";
          
          ?></td>
      <td width="100"><?php 
          $t2=mysql_result($re3,0,'valor');
if($t2>=15)
{
 echo "<img src='img/soleadoo.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Soleado"."</br>";    
}
else if ($t2>10 and $t2<15)
{
 echo "<img src='img/nubladoo.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Nublado"."</br>";    
} 
else if ($t2<10)
{
 echo "<img src='img/llovisnaa.PNG' width='100' height='100' style=' border-radius:20px '>"."</br>";
 echo "Llovisna"."</br>";    
}           
echo "$ayer3"."</br>";
echo "Temp: ".mysql_result($re3,0,'valor')." °C"."</br>";
echo "Hum: ".mysql_result($re3,0,'valor1')."%"."</br>";
          
          ?></td>
    </tr>
  </table>
</center>
</form>