<html>
    <head>
        <title>
            Ejemplo de PHP
        </title>
    </head> 
    <body>
        <h2>Ingresa nuevos datos</h2>
      
         <form method="POST" action="agregar.php">
             <p>Nombre: <input type="text" name="nombre"></p>
             <p>Direccion: <input type="text" name="direccion"></p>
             <p>Telefono: <input type="text" name="telefono"><br></p>
             <p>Email: <input type="text" name="email"></p>
             <p> Imagen:<input type="text" name="imagen"></p>
            <input type="submit" value="enviar">
        </form>
              
            
            
    <?php
    try {
        require_once ('connecta.php');
        
        $sql = "select * from tablacurso";
        $result = $mysqli->query($sql);
             
               
    } catch (Exception $e){
        $error = $e -> getMessage();
    }
   ?>
  <table border =1> 
      <TR>
          <TD>&nbsp;Nombre&nbsp;</TD>
          <TD>&nbsp;Direccion&nbsp;</TD>
          <TD>&nbsp;Telefono&nbsp;</TD>
          <TD>&nbsp;Email&nbsp;</TD>
          <TD>&nbsp;Imagen&nbsp;</TD>
      </TR>  
      
   <?php
       While($row = $result -> fetch_array()){
           printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s&nbsp</td><td>&nbsp;"
                   . "%s&nbsp</td><td>&nbsp;<img src =img</td></tr>", 
                   $row["nombre"],$row["direccion"],$row["telefono"],$row["email"],$row["imagen"]);
                   
       } 
       $result -> close();
       $mysqli -> close();
   
   ?> 
  </table>
  </body>
 </html>


