<?php
include_once('conexion.php');


$con=mysqli_connect($host,$usuario,$clave,$bd) or die('Fallo la conexion');
mysqli_set_charset($con,"utf8");

$txtCedulaRegistro=$_POST['cedulaRegistro'];
$txtNombreRegistro=$_POST['nombreRegistro'];
$txtUsuarioRegistro=$_POST['usuarioRegistro'];
$txtContraseñaRegistro=$_POST['contraseñaRegistro'];


$sql="INSERT INTO datos VALUES('$txtCedulaRegistro', '$txtNombreRegistro', '$txtUsuarioRegistro', '$txtContraseñaRegistro', '1')";
$query= mysqli_query($con, $sql);

if ($query) {
    Header("Location: index.php");
}else{

}
?>