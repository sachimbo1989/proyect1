<HTML>
<BODY>
    <?php

          $num=$_POST['numero'];
            $tipo=POST['Base'];
            if($tipo=="decimal"){
                echo "El numero en binario es: ";
                $bin=$num;
                $i=0;
                while($bin>0){                    
                    $resid=$bin%2;
                    $div=$bin/2;
                    $binario[]=$resid;
                    $bin=intval($div);    
                } 
                krsort($binario);
                foreach ($binario as $clave => $valor) 
                { 
                    echo $valor; 
                }
                echo '<br>';
                echo "El numero en octal es: ";
                while($num>0){                    
                    $resid1=$num%8;                    
                    $div=$num/8;
                    $octal[]=$resid1;
                    $num=intval($div);                   
                } 
                krsort($octal);
                foreach ($octal as $clave1 => $valor1) 
                { 
                    echo $valor1; 
                }
            }
            else {
                if($tipo=="binario"){
                    
                }     
            }     
        ?>
</BODY>
</HTML>
 














