<?php
include('conexion.php');

$con=mysqli_connect($host,$usuario,$clave,$bd) or die('Fallo la conexion');
mysqli_set_charset($con,"utf8");

$id=$_POST['id'];
$nombre=$_POST['name'];
$descripcion=$_POST['desc'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['price'];


$sql="INSERT INTO productos VALUES('$id', '$nombre', '$descripcion', '$cantidad', '$precio')";
$query= mysqli_query($con, $sql);

if ($query) {
    Header("Location: registrarProducto.php");
}else{

}
?>