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
             echo "<img src='img/bebida_calor.jpg' width='300' height='450' style=' border-radius:20px '>"."</br>";
    
          }
		   else if($t<20 and $t>14)
		   {
              echo "<img src='img/bebida.jpg' width='300' height='450' style=' border-radius:20px '>"."</br>";                        
           }
		   else if($t<=13)
           {
               echo "<img src='img/bebida_fria.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
           }
                    
            ?>
        </td> 
	 </tr>
	 	   <tr>
		 <td>
            <form action="rep.html">
             <button type="submit" name="submit">salir</button>
            </form>
         </td>
	   </tr>
  </table>
</center>