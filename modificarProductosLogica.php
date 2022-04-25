<?php
include 'conexion.php';
$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

if (empty($_POST['id']) || empty($_POST['nombre']) || empty($_POST['descripcion']) || empty($_POST['cantidad']) || empty($_POST['precio'])) {
    $alert = '<p class="msg_error">Todos los campos son obligatorios</p>';
} else {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $cantidad = $_POST['cantidad'];
    $precio = $_POST['precio'];

    $sql = "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', cantidad='$cantidad', precio = '$precio' WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo  '<p class="msg_save">Registro actualizado exitosamente</p>';
     }else {
         $alert = '<p class="msg_error">Error al actualizar el registro</p>';
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
}else{
    while ($data = mysqli_fetch_array($sql)) {
        $id = $data['id'];
        $nombre = $data['nombre'];
        $descripcion = $data['descripcion'];
        $cantidad = $data['cantidad'];
        $precio = $data['precio'];
    }
}




/*
function updateProduct()
{
    $id = txtValue("id");
    $name = txtValue("nombre");
    $desc = txtValue("descripcion");
    $cant = txtValue("canitdad");
    $precio = txtValue("precio");

    if ($id && $name && $desc && $cant && $precio) {
        $sql = "UPDATE productos SET nombre = '$name', descripcion = '$desc', cantidad='$cant', precio = '$precio' WHERE id = '$id'";
        if (mysqli_query($GLOBALS['con'], $sql)) {
            echo "Registro actualizado exitosamente";
        }
        else {
            echo "Error";
        }
    }
    else {
        echo "Seleccione algun dato";
    }
}

*/



/*

include("conexion.php");
$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

/*ACTUALIZAR DATOS
if (isset($_POST['updBtn'])) {
    updateProduct();
}*/
/*
function txtValue($value)
{
    $txtBox = mysqli_real_escape_string($GLOBALS['con'], trim($_POST[$value]));
    if (empty($txtBox)) {
        return false;
    }
    else {
        return $txtBox;
    }
}

//UPDATE DATOS


$id=$_POST['id'];
$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$cantidad=$_POST['cantidad'];
$precio=$_POST['precio'];



$sql="UPDATE productos SET nombre='$nombre', descripcion='$descripcion' , 'cantidad=$cantidad' , 'precio=$precio' WHERE id='$id'";
$query=mysqli_query($con, $sql);

if ($query) {
    header("Location: modificarProducto.php");
}
*/

?>