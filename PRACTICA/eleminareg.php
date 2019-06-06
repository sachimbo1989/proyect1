<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
       
        <title>
            Borrar Registros
        </title>
        
    </head> 
    <body>
        <h2>Eliminar Registros</h2>
    <?php
    try {
        require_once ('connecta.php');
        
        $sql = "select * from tablacurso";
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
          <Th>&nbsp;Eliminar&nbsp;</Th>
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
                   . "</td><td><a href= \"borrar.php?id=%d\">Borrar</a></td></tr>", 
                   $row["nombre"],$row["direccion"],$row["telefono"],$row["email"],$row["imagen"],$row["id"]);
                   
       } 
       $result -> close();
       $mysqli -> close();
   
   ?> 
  </table>
  </body>
 </html>
