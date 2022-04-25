<?php
include 'conexion.php';
$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

if (empty($_POST['id']) || empty($_POST['id_producto']) || empty($_POST['cantidad']) || empty($_POST['fecha']) || empty($_POST['total'])) {
    $alert = '<p class="msg_error">Todos los campos son obligatorios</p>';
}
else {
    $id = $_POST['id'];
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $total = $_POST['total'];

    $sql = "UPDATE registraringresos SET id_producto = '$idProducto', cantidad = '$cantidad', fecha = '$fecha', total = '$total' WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo '<p class="msg_save">Registro actualizado exitosamente</p>';
    }
    else {
        echo '<p class="msg_error">Error al actualizar el registro</p>';
    }
}

//MOSTRAR DATOS EN CAMPOS DE TXT
if (empty($_GET['id'])) {
    header("Location: verIngresos.php");
}

$idIng = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM registraringresos WHERE id = '$idIng'");
$resultado = mysqli_num_rows($sql);
if ($resultado == 0) {
    header("Location: verIngresos.php");
}
else {
    while ($data = mysqli_fetch_array($sql)) {
        $id = $data['id'];
        $idProducto = $data['id_producto'];
        $cantidad = $data['cantidad'];
        $fecha = $data['fecha'];
        $total = $data['total'];
    }
}

?>