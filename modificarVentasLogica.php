<?php
include 'conexion.php';
$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

if (empty($_POST['id']) || empty($_POST['id_producto']) || empty($_POST['id_cliente']) || empty($_POST['cantidad']) || empty($_POST['fecha']) || empty($_POST['total'])) {
    $alert = '<p class="msg_error">Todos los campos son obligatorios</p>';
} else {
    $id = $_POST['id'];
    $id_producto = $_POST['id_producto'];
    $id_cliente = $_POST['id_cliente'];
    $cantidad = $_POST['cantidad'];
    $fecha = $_POST['fecha'];
    $total = $_POST['total'];

    $sql = "UPDATE registrarventas SET id_producto = '$id_producto', id_cliente = '$id_cliente', cantidad = '$cantidad', fecha = '$fecha', total = '$total' WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: modificarVentas.php?save=Registro modificado exitosamente");
     }else {
        header("Location: modificarVentas.php?error=Error al modificar el registro");
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
}else{
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