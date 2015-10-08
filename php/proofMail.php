<?php
Echo "<h1>Prueba envÃ­o de correo</h1>";
$para      = 'wiarodriguezmo@unal.edu.co';
$titulo    = 'El tÃ­tulo';
$mensaje   = 'Hola';
$cabeceras = 'From: ijsotoq@unal.edu.co' . "\r\n" .
    'Reply-To: wiarodriguezmo@unal.edu.co' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($para, $titulo, $mensaje, $cabeceras))echo "Enviado"; else echo "no enviado";
?>
