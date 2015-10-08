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

$nombreProy = $_POST['proyecto'];
$nombrePart = $_POST['nombrePart'];
$fecha = $_POST['fecha'];
$edadn = $_POST['edadn'];
$lugarn = $_POST['lugarn'];
$vinculado = $_POST['vinculado'];
$ceroCuatro = $_POST['ceroCuatro'];
$ceroCuatroOtro = $_POST['ceroCuatroOtro'];

$unouno = $_POST['unouno'];
$unounootro = $_POST['unounootro'];
$unodos = $_POST['unodos'];
$unodosW = $_POST['unodosW'];

$dosuno = $_POST['dosuno'];
$dosdos = $_POST['dosdos'];

$tresuno = $_POST['tresuno'];
$tresdos = $_POST['tresdos'];
$trestres = $_POST['trestres'];

$cuatrouno = $_POST['cuatrouno'];
$cuatrodos = $_POST['cuatrodos'];
$cuatrotres = $_POST['cuatrotres'];

if($fecha.$edadn.$lugarn != ""){
  if ($edadn == "") {
    $edadn = date('Y/m/d') - $fecha ;
  }
  $sqlP = "INSERT INTO Persona( `nombre`, `fechaNac`, `edad`, `lugarNac`) VALUES ('".$nombrePart."', '". $fecha ."', '".$edadn."', '".$lugarn."')";
  $conn->query($sqlP);
}
$sqlP = "SELECT idPersona FROM Persona WHERE nombre LIKE '".$nombrePart. "%'";
$result = $conn->query($sqlP);
$rs = $result->fetch_array(MYSQLI_ASSOC);
$participante = $rs['idPersona'];

$sqlP = "SELECT idProyecto FROM Proyecto WHERE nombre LIKE '".$nombreProy. "'";
$result = $conn->query($sqlP);
$rs = $result->fetch_array(MYSQLI_ASSOC);
$proyecto = $rs['idProyecto'];

$sql = "INSERT INTO EncUsuarios(`0.3`, `0.4`, `0.4Otro`, `1.1`, `1.1Otro`, `1.2`, `1.2W`, `2.1`, `2.2`, `3.1`, `3.2`, `3.3`, `4.1`, `4.2`, `4.3`, `usuario`, `proyecto`) VALUES ('".$vinculado."','".$ceroCuatro."','".$ceroCuatroOtro."','".$unouno."','".$unounootro."','".$unodos."','".$unodosW."','".$dosuno."','".$dosdos."','".$tresuno."','".$tresdos."','".$trestres."', '". $cuatrouno ."', '".$cuatrodos."', '".$cuatrotres."','".$participante."','".$proyecto."')";

if ($conn->query($sql) === TRUE) {
	header("Location: ../resp/exitoso.php?hizo=Encuesta a usuarios");
	die();
    echo "New record created successfully".$sede;
} else {
	header("Location: ../resp/error.php?error=" . $conn->error);
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
