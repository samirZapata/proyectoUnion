<?php
include('conexion.php');

$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$tel = $_POST['telefono'];
$email = $_POST['email'];


$sql = "INSERT INTO clientes VALUES('$id', '$nombre', '$apellido', '$direccion', '$tel', '$email')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: registrarClientes.php");
}
else {
//echo '<script language="javascript">alert("Registro exitoso!");</script>';
}
?>