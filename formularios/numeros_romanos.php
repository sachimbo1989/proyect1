<html>
    <body>
        <?php
            function romano($integer, $upcase = true){
                $tabla = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 
                       'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9,   
                       'V'=>5, 'IV'=>4, 'I'=>1);
                $return = '';
                while($integer > 0){
                    foreach($table as $rom=>$arb){
                        if($integer >= $arb){
                            $integer -= $arb;
                            $return .= $rom;
                            break;
                        }
                    }
                }
                return $return;
            }
            $numero=$_POST['anio'];
            if($numero>=1000 && $numero<=2000){
                $num_rom=romano($numero);
                echo "El año se representa como: ".$num_rom;
            }
            else
                echo "Rango de  1000 y 2000!!!";
        ?>        
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

