<?php
include('conexion.php');

$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$cantidad = $_POST['cantidad'];
$precio = $_POST['precio'];


$sql = "INSERT INTO productos VALUES('$id', '$nombre', '$descripcion', '$cantidad', '$precio')";
$query = mysqli_query($con, $sql);

if ($query) {
    Header("Location: registrarProducto.php");
}
else {
//echo '<script language="javascript">alert("Registro exitoso!");</script>';
}
?>