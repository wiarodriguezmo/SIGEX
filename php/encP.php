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

$proyecto = $_POST['proyecto'];
$nombrePart = $_POST['nombrePart'];
$fecha = $_POST['fecha'];
$edadn = $_POST['edadn'];
$lugarn = $_POST['lugarn'];
$vinculado = $_POST['vinculado'];
$ceroCuatro = $_POST['ceroCuatro'];
$ceroCuatroOtro = $_POST['ceroCuatroOtro'];
$unouno = $_POST['unouno'];
$unodos = $_POST['unodos'];
$unotres = $_POST['unotres'];
$unocuatro = $_POST['unocuatro'];
$unocinco = $_POST['unocinco'];
$unoseis = $_POST['unoseis'];
$unosiete = $_POST['unosiete'];

$dosuno = $_POST['dosuno'];
$dosdos = $_POST['dosdos'];
$dostres = $_POST['dostres'];
$doscuatro = $_POST['doscuatro'];
$doscinco = $_POST['doscinco'];
$dosseis = $_POST['dosseis'];
$dossiete = $_POST['dossiete'];

if($fecha.$edadn.$lugarn != ""){
  if ($edadn == "") {
    $edadn = 55; //TEMPORAL - La idea es que haga el cálculo automático
  }
  $sqlP = "INSERT INTO Persona( `nombre`, `fechaNac`, `edad`, `lugarNac`) VALUES ('".$nombrePart."', '". $fecha ."', '".$edadn."', '".$lugarn."')";
  $conn->query($sqlP);
}
$sqlP = "SELECT idPersona FROM Persona WHERE nombre LIKE '".$nombrePart. "%'";
$result = $conn->query($sqlP);
$rs = $result->fetch_array(MYSQLI_ASSOC);
$participante = $rs['idPersona'];


$sql = "INSERT INTO EncParticipantes(`0.3`, `0.4`, `0.4Otro`, `1.1`, `1.1Otro`, `1.2`, `1.3`, `1.4`, `1.5`, `1.6`, `1.7`, `2.1`, `2.2`, `2.3`, `2.4`, `2.5`, `2.6`, `2.7`, `participante`, `proy`) VALUES ('".$vinculado."', '". $ceroCuatro ."', '".$ceroCuatroOtro."', '".$unouno."', NULL, '".$unodos."', '".$unotres."',  '".$unocuatro."', '".$unocinco."', '".$unoseis."', '".$unosiete."', '".$dosuno."', '".$dosdos."', '".$dostres."', '".$doscuatro."', '".$doscinco."', '".$dosseis."', '".$dossiete."', '".$participante."', '".$proyecto."')";

if ($conn->query($sql) === TRUE) {
	header("Location: ../resp/exitoso.php?hizo=proyecto");
	die();
    echo "New record created successfully".$sede;
} else {
	header("Location: ../resp/error.php?error=" . $conn->error .$sql);
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
