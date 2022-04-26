<?php
include('conexion.php');

$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

$id = $_POST['id'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];
$total = $_POST['total'];


$sql = "INSERT INTO registrarIngresos VALUES('$id', '$producto', '$cantidad', '$fecha', '$total')";
$query = mysqli_query($con, $sql);

if ($query) {
    header("Location: registrarIngresos.php?save=Registro guardado exitosamente");
}
else {
    header("Location: registrarIngresos.php?error=Error al guardar el registro");
}
?>