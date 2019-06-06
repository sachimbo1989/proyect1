<?php
$id = $_GET[id];

try {
     require_once ('connecta.php');
       
     $sql = " delete from tablacurso where id = $id";
     //echo "$sql";
     $result = $mysqli->query($sql);
} catch (Exception $e){
        $error = $e -> getMessage();
    }
    header("Location: eliminareg.php");
   ?>
