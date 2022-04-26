<?php
include('conexion.php');

$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$user = $_POST['usuario'];
$pass = $_POST['clave'];
$idP = $_POST['idPerfil'];


$sql = "INSERT INTO datos VALUES('$id', '$nombre', '$user', '$pass', '$idP')";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: registrarUsuario.php?save=Registro guardado exitosamente");
}
else {
    header("Location: registrarUsuario.php?error=Error al guardar el registro");
}
?>