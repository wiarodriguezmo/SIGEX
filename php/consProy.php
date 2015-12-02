<?php
header("Content-Type: application/json; charset=UTF-8");
$servername = "localhost";
$username = "root";
$password = "212216priac";
$dbname = "proof";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!$conn->set_charset("utf8")) {
    printf("Error cargando el conjunto de caracteres utf8: %s\n", $conn->error);
    exit();
}

$result = $conn->query("SELECT nombre, facultad, sede FROM Proyecto WHERE nombre LIKE '%". $_GET["proy"] . "%'" );

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}

    $outp .= '{"nombre":"'. $rs["nombre"].'","descrip":" Sede: '.$rs["sede"].' - Facultad: '.$rs["facultad"].'"}';

}
$outp ='{"records":['.$outp.']}';
$conn->close();

echo($outp);
?>
