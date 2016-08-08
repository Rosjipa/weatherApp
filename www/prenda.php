<?php

include "conectabd.php";

     $SQL = "SELECT * FROM temperatura WHERE id=(
    SELECT max(id) FROM temperatura)";

     $re = mysql_query($SQL, $serve);
 
$t=mysql_result($re,0,'valor');

?> 

<center>
	<table border="0">
    <tr>
	  <td>        </td>
      <td><center>Mujeres</center></td>
      <td><center>Varones</center></td>
     </tr>
     <tr>                
       <td>Accesorio(s)</td>
       <td>
          <?php 
          if($t>17)
          {
             echo "<img src='img/accesorio_calor_mujer.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
          }
		   else if($t>=13 and $t<=17)
		   {
              echo "<img src='img/accesorio_mujer.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>";                        
           }
		   else if($t<13)
           {
               echo "<img src='img/accesorio_frio_mujer.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
           }
                    
            ?>
        </td> 
	    <td>
          <?php 
          if($t>17)
          {
             echo "<img src='img/accesorio_calor_varon.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
          }
		   else if($t>=13 and $t<=17)
		   {
              echo "<img src='img/accesorio_varon.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>";                        
           }
		   else if($t<13)
           {
               echo "<img src='img/accesorio_frio_varon.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
           }
                    
            ?>
        </td> 
	   </tr>
	  <tr>                
       <td>Prenda(s)</td>
       <td>
          <?php 
          if($t>17)
          {
             echo "<img src='img/prenda_calor_mujer.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
          }
		   else if($t>=13 and $t<=17)
		   {
              echo "<img src='img/prenda_mujer.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>";                        
           }
		   else if($t<13)
           {
               echo "<img src='img/prenda_frio_mujer.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
           }
                    
            ?>
        </td> 
		<td>
          <?php 
          if($t>17)
          {
             echo "<img src='img/prenda_calor_varon.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
          }
		   else if($t>=13 and $t<=17)
		   {
              echo "<img src='img/prenda_varon.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>";                        
           }
		   else if($t<13)
           {
               echo "<img src='img/prenda_frio_varon.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
           }
                    
            ?>
        </td> 
	   </tr>
	<tr>                
       <td>Calzado(s)</td>
       <td>
          <?php 
          if($t>17)
          {
             echo "<img src='img/zapato_calor_mujer.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
          }
		   else if($t>=13 and $t<=17)
		   {
              echo "<img src='img/calzado_mujer.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>";                        
           }
		   else if($t<13)
           {
               echo "<img src='img/calzado_frio_mujer.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
           }
                    
            ?>
        </td> 
		<td>
          <?php 
          if($t>17)
          {
             echo "<img src='img/zapato_calor_varon.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
          }
		   else if($t>=13 and $t<=17)
		   {
              echo "<img src='img/calzado_varon.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>";                        
           }
		   else if($t<13)
           {
               echo "<img src='img/calzado_frio_varon.jpg' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
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