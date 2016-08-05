<?php
include "conecta.php";

     $SQL = "SELECT * FROM temperatura WHERE id=(
    SELECT max(id) FROM temperatura)";

     $re = mysql_query($SQL, $serve);
 
$t=mysql_result($re,0,'valor');

?> 
  
<center>
  <table border="0">
	  <tr>                
       <td>
          <?php 
          if($t>=20)
          {
             echo "<img src='img/' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
          }
		   else if($t<20 and $t>14)
		   {
              echo "<img src='img/accesorio_mujer.jpg' width='300' height='450' style=' border-radius:20px '>"."</br>";                        
           }
		   else if($t<=13)
           {
               echo "<img src='img/' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
           }
                    
            ?>
        </td> 
	 </tr>
	 	   <tr>
		 <td>
            <form action="index.html">
             <button type="submit" name="submit">salir</button>
            </form>
         </td>
	   </tr>
  </table>
</center>