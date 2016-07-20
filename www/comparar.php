<?php
include "cone.php";

date_default_timezone_set("America/Bogota");

$fechaa=date('Y-m-d', strtotime('-1 day'));
$SQL = "SELECT * FROM temperatura WHERE timestamp='$fechaa'";
$res = mysql_query($SQL, $serve);
echo "Temperatura: ".mysql_result($res,0,'valor')."°C"."</br>";

?> 