<?php
include('conexion.php');

$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

$id = $_POST['id'];
$producto = $_POST['producto'];
$cliente = $_POST['cliente'];
$cantidad = $_POST['cantidad'];
$fecha = $_POST['fecha'];
$total = $_POST['total'];


$sql = "INSERT INTO registrarVentas VALUES('$id', '$producto', '$cliente', '$cantidad', '$fecha', '$total')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: registrarVentas.php");
}
else {
//echo '<script language="javascript">alert("Registro exitoso!");</script>';
}
?>