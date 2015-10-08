<?php
Echo "<h1>Aplicación para contactar por mensaje desde página oficial OBEX</h1>";
$para      = 'wiarodriguezmo@unal.edu.co';
$titulo    = '[OBEX] - Mensaje de contacto desde página';
$mensaje   = 'Mensaje de contacto desde página: HTTP://humanas.unal.edu.co/OBEX' . $_POST['name'] . $_POST['email'] . $_POST['message'];

;
$cabeceras = 'From: mfizac@unal.edu.co' . "\r\n" .
    'Reply-To: mfizac@unal.edu.co' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($para, $titulo, $mensaje, $cabeceras))echo "<h1>Contacto satisfactorio, recibimos su mensaje</h1>";
else echo "<h1>Problemas para contactar, por favor escriba a wiarodriguezmo@unal.edu.co y reporte el problema.</h1>";
header('refresh: 2; ../index.html');
?>
