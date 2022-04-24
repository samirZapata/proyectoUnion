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
    Header("Location: registrarDescuentos.php");
}
else {
//echo '<script language="javascript">alert("Registro exitoso!");</script>';
}
?>