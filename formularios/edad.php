<html>
    <body>
        <?php
        $numero=$_POST['num'];
            $i=1;
             $suma=0;
            while($i<$mes){
                $fecha_nac=cal_days_in_month(CAL_GREGORIAN, $i, 1989);
                $suma=$suma+$fecha_nac;
                $i++;
            }
            $suma1=$suma+$dia-1;
            $suma2=365-$suma1;
            $anio1=date(Y);
            $mes1=date(n);
            $anio_act=($anio1-1-$anio)*365;
            
            $j=1;
            $suma3=0;
            while($j<$mes1){
                $fecha_act=cal_days_in_month(CAL_GREGORIAN, $j, 1989);
                $suma3=$suma3+$fecha_act;
                $j++;
            }
            $dia1=date(j);
            $suma4=$suma3+$dia1;
            $total=$suma2+$anio_act+$suma4;
            echo "La cantidad de dias entre su fecha de nacimiento ".$dia."/".$mes."/".$anio." y la fecha actual es: ".$total;
        ?>
    </body>
</html>
<?php

