<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
 $timestamp = date('Y-m-d'); // Captura la hora y fecha
 $valor=$_GET['valor'];
 $valor1=$_GET['valor1'];
 $valor2=$_GET['valor2'];
@$conexion = mysql_connect('localhost','u515964723_yes','70152878')or die ('Ha fallado la conexión: '.mysql_error());
mysql_select_db('u515964723_clim')or die ('Error al seleccionar la Base de Datos: '.mysql_error());
$sql="INSERT INTO temperatura(timestamp, valor, valor1, valor2) values('".$timestamp."', '".$valor ."', '".$valor1 ."', '".$valor2 ."')";
$res=mysql_query($sql,$conexion);
?>
</body>
</html>