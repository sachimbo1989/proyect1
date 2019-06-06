<html>
    <body>
<?php
    $valor1=214567.78;
    $valor= intval($valor1);
   while($valor>0){
    if($valor>=100){
        $cien=$valor/100;
        echo intval($cien)." billetes de 100$<br>";
        $valor=$valor%100;
    }
    else{
        if($valor>=50 && $valor<100){
            $cincuenta=$valor/50;
            echo intval($cincuenta)." billetes de 50$<br>";
            $valor=$valor%50;
        }
        else{
            if($valor>=20 && $valor<50){
                $veinte=$valor/20;
                echo intval($veinte)." billetes de 20$<br>";
                $valor=$valor%20;
            }
            else{
                if($valor>=10 && $valor<20){
                    $diez=$valor/10;
                    echo intval($diez)." billetes de 10$<br>";
                    $valor=$valor%10;
                }
                else{
                    if($valor>=5 && $valor<10){
                        $cinco=$valor/5;
                        echo intval($cinco)." billetes de 5$<br>";
                        $valor=$valor%5;
                    }
                    else {
                        echo intval($valor)." billetes de 1$<br>";
                        $valor=$valor%1;
                    }
                }
            }
        }   
    }
   }
   $dec=explode(".", $valor1);
   while($dec[1]>0){
        if($dec[1]>=50 && $dec[1]<100){
            $cincuenta=$dec[1]/50;
            echo intval($cincuenta)." monedas de 50cntvs<br>";
            $dec[1]=$dec[1]%50;
        }
        else{
            if($dec[1]>=25 && $dec[1]<55){
                $veinte=$dec[1]/25;
                echo intval($veinte)." monedas de 25cntvs<br>";
                $dec[1]=$dec[1]%25;
            }
            else{
                if($dec[1]>=10 && $dec[1]<25){
                    $diez=$dec/10;
                    echo intval($diez)." monedas de 10cntvs<br>";
                    $dec[1]=$dec[1]%10;
                }
                else{
                    if($dec[1]>=5 && $dec[1]<10){
                        $cinco=$dec[1]/5;
                        echo intval($cinco)." monedas de 5cntvs<br>";
                        $dec[1]=$dec[1]%5;
                    }
                    else {
                        echo intval($dec[1])." monedas de 1ctnv";
                        $dec[1]=$dec[1]%1;
                    }
                }
            }
        }   
   }
   
?>
    </body>
</html>
