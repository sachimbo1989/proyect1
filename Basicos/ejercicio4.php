<html>
    <body>
<?php
        
$numero=3443;
       
$num1=intval($numero/10);
$num2=$numero %10;
$num3=$num2*1000;

$num4=intval($num1/10);
$num5=$num1%10;
$num6=$num5*100;

$num7=intval($num4/10);
$num8=$num4%10;
$num9=$num8*10;

$resultado=$num3+$num6+$num9+$num7;
echo $resultado."<br>";
if($resultado==$numero)
    echo "El numero si es capicua";
else {
    echo "El numero no es capicua";
}

?>
    </body>
</html>



