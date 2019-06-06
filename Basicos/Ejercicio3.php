<?php
    function Xa($raizc,$a,$b){
        $x1=(-$b+$raizc)/(2*$a);
        return $x1;
    } 
    function Xb($raizc,$a,$b){
        $x2=(-$b-$raizc)/(2*$a);
        return $x2;
    } 
    $va=1;
    $vb=4;
    $vc=-1;
    $valor=($vb*$vb)-(4*$va*$vc);
    $raiz= sqrt($valor);
    if($raiz>=0){
        $r1=Xa($raiz,$va,$vb);
        $r2=Xb($raiz,$va,$vb);
        echo "LAS RAICES SON <br>";
        echo "X1: ".$r1."</br>";
        echo "X2: ".$r2;        
    }
    else {
        echo 'NO SE PUEDE SACAR LAS RAICES DE LA ECUACION!!!';
    }
?>

