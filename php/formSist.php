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

$unouno = $_POST['unouno'];
$unodos = $_POST['unodos'];
$unotres = $_POST['unotres'];
$unocuatro = $_POST['unocuatro'];
$unocinco = $_POST['unocinco'];
$unocincoW = $_POST['unocincoW'];
$unoseis = $_POST['unoseis'];
$unoseisuno = $_POST['unoseisuno'];

$dosuno = $_POST['dosuno'];
$dosdos = $_POST['dosdos'];
$dostres = $_POST['dostres'];
$doscuatro = $_POST['doscuatro'];
$doscinco = $_POST['doscinco'];
$dosseis = $_POST['dosseis'];

$tresuno = $_POST['tresuno'];
$tresdos = $_POST['tresdos'];
$trestres =$_POST['trestres'];
$trescuatro = $_POST['trescuatro'];
$trescinco = $_POST['trescinco'];
$tresseis = $_POST['tresseis'];
$tressiete = $_POST['tressiete'];
$tresocho = $_POST['tresocho'];
$tresnueve = $_POST['tresnueve'];
$tresdiez = $_POST['tresdiez'];
$tresonce = $_POST['tresonce'];
$tresonce = $_POST['tresonceW'];

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

$sql = "INSERT INTO FormSistemat(`1.1`, `1.1Otro`, `1.2`, `1.3`, `1.4`, `1.5`, `1.5why`, `1.6`, `1.6.1`, `2.1`, `2.2`, `2.2Otro`, `2.3`, `2.4`, `2.5`, `2.6`, `3.1`, `3.2`, `3.3`, `3.4`, `3.5`, `3.6`, `3.7`, `3.8`, `3.9`, `3.10`, `3.11`, `3.11why`, `director`, `proyecto`) VALUES ('".$unouno."',NULL,'".$unodos."','".$unotres."','".$unocuatro."','".$unocinco."','".$unocincoW."','".$unoseis."','".$unoseisuno."','".$dosuno."', '". $dosdos ."',NULL, '".$dostres."', '".$doscuatro."','".$doscinco."','".$dosseis."','".$tresuno."','".$tresdos."','".$trestres."','".$trescuatro."','".$trescinco."','".$tresseis."','".$tressiete."','".$tresocho."','".$tresnueve."','".$tresdiez."','".$tresonce."','".$tresoncew."','".$participante."','".$proyecto."')";

if ($conn->query($sql) === TRUE) {
	header("Location: ../resp/exitoso.php?hizo=formato de sistematización");
	die();
    echo "New record created successfully".$sede;
} else {
	header("Location: ../resp/error.php?error=" . $conn->error);
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>