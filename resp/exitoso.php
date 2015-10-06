<?php

header('Content-Type: text/html; charset=UTF-8');
echo "<h1>GRACIAS POR COMPLETAR LA ENCUESTA : " . $_GET["hizo"];
header('refresh: 10; ../index.html');

?>
