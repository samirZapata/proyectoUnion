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
    //echo '<p class="save">Registro guardado exitosamente</p>';
    Header("Location: registrarProducto.php?save=Registro guardado exitosamente");
}
else {    
    Header("Location: registrarProducto.php?save=Error al guardar el registro");
}


/* $sql = "SELECT * FROM productos"; $query = mysqli_query($con, $sql); if ($query) {
 while ($row = mysqli_fetch_array($query)) {
 echo $row['id'] . " " . $row['nombre'] . " " . $row['descripcion'] . " " . $row['cantidad'] . " " . $row['precio'] . "<br>";
 }
 Header("Location: verProductos.php"); } else {
 echo "No hay datos"; }*/
?>