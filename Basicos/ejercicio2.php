

<html>
    <body>
<?php
 $numero1=9;
 $numero2=10;
 $numero3=15;

if($numero1>$numero2 && $numero2>$numero3) 
    echo $numero1." Es el mayor";
else 
    {
    if($numero2>$numero1 && $numero2>$numero3)
        echo $numero2." Es el mayor";
    
    else {
        echo $numero3." Es el mayor ";
         }
        if($numero1==$numero2 && $numero2==$numero3)
            echo "Los tres numeros son iguales";
        }
?>
    </body>
</html>
        

