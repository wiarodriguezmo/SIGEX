<?php

header('Content-Type: text/html; charset=UTF-8');
$servername = "localhost";
$username = "root";
$password = "212216priac";
$dbname = "priac";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

/* cambiar el conjunto de caracteres a utf8 */
if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
    exit();
}

$sql = "SELECT idPersona FROM Persona WHERE nombre LIKE '". $_GET["variable1"] . "%'";

$outp = $conn->query($sql);
$row_cnt = $outp->num_rows;

$devolver = '{"records":[{"existe": "NO" }]}';

if($row_cnt > 0){
	$devolver ='{"records":[{"existe": "SI" }]}';
}

$conn->close();
echo($devolver);
?> 
