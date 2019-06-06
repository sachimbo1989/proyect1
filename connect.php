<?php
$mysqli = new mysqli('webapp.espoch.edu.ec', 'user1', 'AB1.sara', 'baseapp1');

/*
 * Esta es la forma OO "oficial" de hacerlo,
 * AUNQUE $connect_error estaba averiado hasta PHP 5.2.9 y 5.3.0.
 */
if ($mysqli->connect_error) {
    die('Error de Conexión (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

echo 'Éxito... ' . $mysqli->host_info . "\n";

$mysqli->close();
?>