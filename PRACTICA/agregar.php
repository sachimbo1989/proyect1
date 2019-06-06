<?php
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$imagen=$_POST['imagen'];


  try{
      require_once('connecta.php');
      $sql= "insert into tablacurso(nombre,direccion,telefono,email,imagen)"."values('$nombre','$direccion','$telefono','$email','$imagen')";
      $result=$mysqli->query($sql);
      } catch(Exception $e){
          
          $error= $e ->getMessage();
      }
      header("Location: despliegue.php");
?>
  