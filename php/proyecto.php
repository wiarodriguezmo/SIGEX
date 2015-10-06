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

$name = $_POST['nombre'];
$sede = $_POST['sede'];
if($sede == "Bogotá" )$facultad = $_POST['facultad'];
else if ($sede == "Manizales" )$facultad = $_POST['facultad3'];
else if ($sede == "Medellín" )$facultad = $_POST['facultad2'];
else if ($sede == "Palmira" )$facultad = $_POST['facultad4'];
else $facultad = $_POST['facultad5'];
$region = $_POST['region'];
$fecha = date('Y/m/d');
$modalidad = $_POST['modalidad'];


$sql = "INSERT INTO Proyecto VALUES ('".$name."','".$facultad."','".$sede."','".$region."','".$fecha."','".$modalidad."')";

if ($conn->query($sql) === TRUE) {
	header("Location: ../resp/exitoso.php?hizo=proyecto");
	die();
    echo "New record created successfully".$sede;
} else {
	header("Location: ../resp/error.php?error=" . $conn->error);
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
