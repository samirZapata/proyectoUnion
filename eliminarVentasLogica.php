<?php
include 'conexion.php';
$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

if (empty($_POST['id'])) {
    $alert = '<p class="msg_error">Todos los campos son obligatorios</p>';
}
else {
    $id = $_POST['id'];

    $sql = "DELETE FROM registrarventas WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo '<p class="msg_save">Registro eliminado exitosamente</p>';
    }
    else {
        $alert = '<p class="msg_error">Error al eliminar el registro</p>';
    }
}

//MOSTRAR DATOS
if (empty($_GET['id'])) {
    header("Location: verVentas.php");
}

$idUser = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM registrarventas WHERE id = '$idUser'");
$resultado = mysqli_num_rows($sql);
if ($resultado == 0) {
    header("Location: verVentas.php");
}
else {
    while ($data = mysqli_fetch_array($sql)) {
        $id = $data['id'];
        $id_producto = $data['id_producto'];
        $id_cliente = $data['id_cliente'];
        $cantidad = $data['cantidad'];
        $fecha = $data['fecha'];
        $total = $data['total'];
    }
}

?>