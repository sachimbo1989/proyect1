<?PHP
define ("CONSTANTE", "hola");

$mensaje_es="Hola";
$mensaje_en="Hello";
$idioma = "es";
$mensaje = "mensaje_" . $idioma;
echo $$mensaje ;
echo  CONSTANTE ;


?>


