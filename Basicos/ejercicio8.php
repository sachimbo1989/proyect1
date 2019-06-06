//Diseñar un programa en PHP que descomponga un numero entero en factores 
//primos. Se sugiere poner el numero entero en una variable para 
//probar con otros posteriormente. 

<html>
    <body>
<?php
 $numero=252;
 $cont=2;
 
 while($cont<=$numero){
   if($numero%$cont==0){
     $numero= $numero/$cont;
     echo $cont.", ";
       }
    else 
       $cont++;
       
   }
?>
    </body>
</htmal>

