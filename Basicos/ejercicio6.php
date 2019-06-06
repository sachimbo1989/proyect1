<html>
    <body>
        <?php
            $numero=6;
            $i=1;
            $suma=0;
            while($i<$numero){
                if($numero%$i==0){
                    $suma=$suma+$i;
                    $i++;
                }
                else
                    $i++;                
            }
            if($suma==$numero)
                echo "El numero ".$suma." es perfecto!!!<br>";
            else
                echo "El numero ".$suma." no es perfecto!!!<br>";
            $j=1;
            $lista=0;
            echo "LISTA DE NUMEROS PERFECTOS <br>";
            while($j<=33550337){
                while($lista<=5){
                    $k=1;
                    $suma1=0;
                    while($k<$j){
                        if($j%$k==0){
                            $suma1=$suma1+$k;
                            $k++;
                        }
                        else
                            $k++;                
                    } 
                    if($j==$suma1){
                        echo $suma1."<br>";
                        $lista++;
                    }
                    $j++;
                }                
            }
            
        ?>
    </body>
</html>

