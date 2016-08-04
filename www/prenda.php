<?php

include "conecta.php";

     $SQL = "SELECT * FROM temperatura WHERE id=(
    SELECT max(id) FROM temperatura)";

     $re = mysql_query($SQL, $serve);
 
$t=mysql_result($re,0,'valor');

?> 

        
        <center><table border="0">
            <tr>
                <td>Prendas</td>
                <td><center>Mujeres</center></td>
                <td><center>Varones</center></td>
                <td>
                    <form action="index.html">
                    <button type="submit" name="submit">salir</button>
                    </form>
                </td>
            </tr>
            <tr>                
                <td>lentes</td>
                <td>
                    <?php 
                    if($t>=18)
{
 echo "<img src='img/soleadoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
}else if($t<18 and $t>14){
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
                        
                    }else if($t<=14)
                    {
                       echo "<img src='img/llovisnaa.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
                    }
                    
                    ?>
                </td>
                <td>
                    <?php 
                    if($t>=18)
{
 echo "<img src='img/soleadoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
}else if($t<18 and $t>14){
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
                        
                    }else if($t<=14)
                    {
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
                    }
                    
                    ?>
                </td>
                
            </tr>
            <tr>                
                <td>lentes</td>
                <td>
                    <?php 
                    if($t>=18)
{
 echo "<img src='img/soleadoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
}else if($t<18 and $t>14){
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
                    }else if($t<14)
                    {
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
                    }
                    
                    ?>
                </td>
                <td>
                    <?php 
                    if($t>=18)
{
 echo "<img src='img/soleadoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
}else if($t<18 and $t>14){
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
                        
                    }else if($t<=14)
                    {
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
                    }
                    
                    ?>
                </td>
            </tr>
            <tr>
                <td>lentes</td>
                <td>
                    <?php 
                    if($t>=18)
{
 echo "<img src='img/soleadoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
}else if($t<18 and $t>14){
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
                    }else if($t<14)
                    {
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
                    }
                    
                    ?>
                </td>
                <td>
                    <?php 
                    if($t>=18)
{
 echo "<img src='img/soleadoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
}else if($t<18 and $t>14){
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
                        
                    }else if($t<=14)
                    {
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
                    }
                    
                    ?>
                </td>
            </tr>
            <tr>
                <td>lentes</td>
                <td>
                    <?php 
                    if($t>=18)
{
 echo "<img src='img/soleadoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
}else if($t<18 and $t>14){
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
                    }else if($t<14)
                    {
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
                    }
                    
                    ?>
                </td>
                <td>
                    <?php 
                    if($t>=18)
{
 echo "<img src='img/soleadoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
}else if($t<18 and $t>14){
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
                        
                    }else if($t<=14)
                    {
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
                    }
                    
                    ?>
                </td>
            </tr>
            <tr>
                <td>lentes</td>
                <td>
                    <?php 
                    if($t>=18)
{
 echo "<img src='img/soleadoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
}else if($t<18 and $t>14){
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
                    }else if($t<14)
                    {
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
                    }
                    
                    ?>
                </td>
                <td>
                  <?php 
                    if($t>=18)
{
 echo "<img src='img/soleadoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
}else if($t<18 and $t>14){
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
                        
                    }else if($t<=14)
                    {
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
                    }
                    
                    ?>
                </td>
            </tr>
            <tr>
                <td>lentes</td>
                <td>
                    <?php 
                    if($t>=18)
{
 echo "<img src='img/soleadoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
}else if($t<18 and $t>14){
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
                    }else if($t<14)
                    {
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
                    }
                    
                    ?>
                </td>
                <td>
                   <?php 
                    if($t>=18)
{
 echo "<img src='img/soleadoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
    
}else if($t<18 and $t>14){
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>";
                        
                    }else if($t<=14)
                    {
                       echo "<img src='img/parnubladoo.PNG' width='150' height='150' style=' border-radius:20px '>"."</br>"; 
                    }
                    
                    ?>
                </td>
            </tr>
        </table>
        </center>