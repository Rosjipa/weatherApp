<?php
$serve = mysql_connect('localhost','root','');
if(!$serve){ echo 'error';}
$db = mysql_select_db('u515964723_clim', $serve);

     $SQL = "SELECT * FROM temperatura WHERE id=(
    SELECT max(id) FROM temperatura)";

     $re = mysql_query($SQL, $serve);
     $temp=mysql_result($re,0,"valor");
if($temp<20)
{
?> 
<img src="imagen/nublado_sol.jpg">
<?php
}
else
{
?>
<img src="imagen/soleado.jpg">
<?php
}
?>