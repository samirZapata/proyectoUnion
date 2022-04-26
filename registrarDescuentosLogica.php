<?php
include('conexion.php');

$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

$id = $_POST['id'];
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$fechaI = $_POST['fechaI'];
$fechaF = $_POST['fechaF'];


$sql = "INSERT INTO descuentos VALUES('$id', '$producto', '$precio', '$fechaI', '$fechaF')";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: registrarDescuento.php?save=Registro guardado exitosamente");
}
else {
    header("Location: registrarDescuento.php?error=Error al guardar el registro");
}
?>