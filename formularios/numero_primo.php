<html>
    <body>
        <?php
            $numero=$_POST['num'];
            $i=1;
            $cont=0;
            if($numero>0){
                while($i<=$numero){
                    if($numero%$i==0){
                        $cont=$cont+$i;
                        $i++;
                    }
                    else {
                        $i++;
                    }
                }
                if($cont==($numero+1)){
                    echo "El numero si es primo!!!";
                }
                else
                    echo"El numero no es primo!!!";
            }
            else
                echo "Ingrese un numero positivo";                
        ?>
    </body>
</html> 

