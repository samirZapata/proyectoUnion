<?php
include 'conexion.php';
$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

$txtCedulaRegistro=$_POST['cedulaRegistro'];
$txtNombreRegistro=$_POST['nombreRegistro'];
$txtUsuarioRegistro=$_POST['usuarioRegistro'];
$txtContraseñaRegistro=$_POST['contraseñaRegistro'];


$sql="INSERT INTO datos VALUES('$txtCedulaRegistro', '$txtNombreRegistro', '$txtUsuarioRegistro', '$txtContraseñaRegistro', '2')";
$query= mysqli_query($con, $sql);
try {
    if ($query) {
        header("Location: index.php?save=Usuario guardado exitosamente");
    }else{
        header("Location: registro.php?error=Error al guardar el usuario");
    }
} catch (\Throwable $th) {
    echo 'Error';
}

?>