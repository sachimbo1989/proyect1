<?php
$id = $_GET['id'];
try {
     require_once ('connecta.php');
       
     $sql = "select * from tablacurso where id = $id";
     $result = $mysqli->query($sql);
     $datos = $result->fetch_assoc();
} catch (Exception $e){
        $error = $e -> getMessage();
    }
   
   ?>
<h1>Modificación de Datos</h1>
<form method = "post" action="modificar.php">
  Nombre:<br>
  <input type="text" name="nombre" value=" <?php echo $datos['nombre']; ?>">
  <br>
  Direccion:<br>
  <input type="text" name="direccion" value=" <?php echo $datos['direccion']; ?>">
  <br>
  Telefono:<br>
  <input type="text" name="telefono" value=" <?php echo $datos['telefono']; ?>">
  <br>
  Email:<br>
  <input type="email" name="email" value=" <?php echo $datos['email']; ?>">
  <br>
  Imagen:<br>
  <input type="text" name="imagen" value=" <?php echo $datos['imagen']; ?>">
  <br>
  <br>
  <input type="submit" value="Modificar">
  <input type="hidden" name="id" value="<?=  $datos['id'];?>">
  
</form>