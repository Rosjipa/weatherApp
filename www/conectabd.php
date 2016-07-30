<?php
$serve = mysql_connect('localhost','root','');
if(!$serve){ echo 'error';}
$db = mysql_select_db('u515964723_clim', $serve);

?> 