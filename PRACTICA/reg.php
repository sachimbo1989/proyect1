<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
       
        <title>
            Modificar Registros
        </title>
        
    </head> 
    <body>
        <h2>Modificar Registros</h2>
    <?php
    try {
        require_once ('conexion.php');
        
        $sql = "select * from tablacurso1";
        $result = $mysqli->query($sql);
             
               
    } catch (Exception $e){
        $error = $e -> getMessage();
    }
   ?>
  <table border =2> 
      <TR>
          <TD>&nbsp;Nombre&nbsp;</TD>
          <TD>&nbsp;Direccion&nbsp;</TD>
          <TD>&nbsp;Telefono&nbsp;</TD>
          <TD>&nbsp;Email&nbsp;</TD>
          <TD>&nbsp;Imagen&nbsp;</TD>
          <Th>&nbsp;Modificar&nbsp;</Th>
      </TR>  
   <?php
       While($row = $result -> fetch_assoc()){
           printf(""
                   . "<tr>"
                   . "<td>&nbsp;%s</td>"
                   . "<td>&nbsp;%s&nbsp;</td>"
                   . "<td>&nbsp;%s&nbsp</td>"
                   . "<td>&nbsp;%s&nbsp</td>"
                   . "<td>&nbsp;%s&nbsp</td>"
                   . "</td><td><a href= \"actualizar.php?id=%d\">Modificar</a></td></tr>", 
                   $row["nombre"],$row["direccion"],$row["telefono"],$row["email"],$row["imagen"],$row["id"]);
                   
       } 
       $result -> close();
       $mysqli -> close();
   
   ?> 
  </table>
  </body>
 </html>

