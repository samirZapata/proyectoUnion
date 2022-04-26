<?php
include 'conexion.php';
$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

if (empty($_POST['id'])) {
    $alert = '<p class="msg_error">Todos los campos son obligatorios</p>';
}
else {
    $id = $_POST['id'];

    $sql = "DELETE FROM productos WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: eliminarProductos.php?save=Registro eliminado exitosamente");
    } else {
        header("Location: eliminarProductos.php?error=Error al eliminar el registro");
    }
}

//MOSTRAR DATOS
if (empty($_GET['id'])) {
    header("Location: verProductos.php");
}

$idUser = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM productos WHERE id = '$idUser'");
$resultado = mysqli_num_rows($sql);
if ($resultado == 0) {
    header("Location: verProductos.php");
}
else {
    while ($data = mysqli_fetch_array($sql)) {
        $id = $data['id'];
        $nombre = $data['nombre'];
        $descripcion = $data['descripcion'];
        $cantidad = $data['cantidad'];
        $precio = $data['precio'];
    }
}

?>