<?php
include 'conexion.php';
$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

if (empty($_POST['id']) || empty($_POST['id_producto']) || empty($_POST['cantidad']) || empty($_POST['fechaInicio']) || empty($_POST['fechaFin'])) {
    $alert = '<p class="msg_error">Todos los campos son obligatorios</p>';
}
else {
    $id = $_POST['id'];
    $idProducto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $fechaI = $_POST['fechaInicio'];
    $fechaF = $_POST['fechaFin'];

    $sql = "UPDATE descuentos SET id_producto = '$idProducto', cantidad = '$cantidad', fechaInicio = '$fechaI', fechaFin = '$fechaF' WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        Header("Location: modificarDescuento.php?save=Registro modificado exitosamente");
    }
    else {
        header("Location: modificarDescuento.php?error=Error al modificar el registro");
    }
}

//MOSTRAR DATOS EN CAMPOS DE TXT
if (empty($_GET['id'])) {
    header("Location: verDescuentos.php");
}

$idDes = $_GET['id'];
$sql = mysqli_query($con, "SELECT * FROM descuentos WHERE id = '$idDes'");
$resultado = mysqli_num_rows($sql);
if ($resultado == 0) {
    header("Location: verDescuentos.php");
}
else {
    while ($data = mysqli_fetch_array($sql)) {
        $id = $data['id'];
        $idProducto = $data['id_producto'];
        $cantidad = $data['cantidad'];
        $fechaI = $data['fechaInicio'];
        $fechaF = $data['fechaFin'];
    }
}

?>