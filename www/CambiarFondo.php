<?php
@$serve = mysql_connect('localhost','root','');
if(!$serve){ echo 'error';}
$db = mysql_select_db('u515964723_clim', $serve);

     $SQL = "SELECT * FROM temperatura WHERE id=(
    SELECT max(id) FROM temperatura)";

     $re = mysql_query($SQL, $serve);
     $temp=mysql_result($re,0,"valor");
if($temp>17)
{
echo "<img src='imagen/soleado.jpg' width='300' height='320' style='border-radius:20px'>";
}
else
{
	if($temp<=17 and $temp>=13)
	  echo "<img src='imagen/nublado_sol.jpg' width='300' height='320' style='border-radius:20px'>";
	if($temp<13)
	  echo "<img src='imagen/nublado.jpg' width='300' height='320' style='border-radius:20px'>";
}

?>