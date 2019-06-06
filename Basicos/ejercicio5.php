<html>
    <body>
<?php
$numero=27;
$numero1=$numero+1;
$i=1;
$suma=0;
while($i<=$numero){
    if($numero %$i==0){
        $suma++; 
        $i++;
    }
    
    $i++;
    
}
if($suma==2)
    echo "El numero si es primo";
else{
    echo " El numero no es primo";
}
?>
    </body>       
</html>
