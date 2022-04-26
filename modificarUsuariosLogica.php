<?php
include 'conexion.php';
$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

if (empty($_POST['id']) || empty($_POST['nombre']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['id_perfil'])) {
    $alert = '<p class="msg_error">Todos los campos son obligatorios</p>';
} else {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $id_perfil = $_POST['id_perfil'];
    

    $sql = "UPDATE datos SET id = '$id', nombre = '$nombre', usuario='$usuario', clave = '$clave', id_perfil = '$id_perfil' WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: modificarUsuarios.php?save=Registro actualizado exitosamente");
     }else {
         header("Location: modificarUsuarios.php?error=Error al actualizar el registro");
     }
}

//MOSTRAR DATOS
if (empty($_GET['id'])) {
    header("Location: verUsuario.php");
}

$idUser = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM datos WHERE id = '$idUser'");
$resultado = mysqli_num_rows($sql);
if ($resultado == 0) {
    header("Location: verUsuario.php");
}else{
    while ($data = mysqli_fetch_array($sql)) {
        $id = $data['id'];
        $nombre = $data['nombre'];
        $usuario = $data['usuario'];
        $clave = $data['clave'];
        $id_perfil = $data['id_perfil'];
        
    }
}