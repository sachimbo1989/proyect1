<html>
    <head>
        <meta charset=" UTF-8">
        <title>  </title>
    </head>
    <body>
<?php
require_once 'dbDetalles.php';
$mysqli = new mysqli($hostname, $username, $password, $database);
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
echo 'Éxito... ' . $mysqli->host_info . "\n";


?>
    </body>
 </html>