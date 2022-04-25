<?php
include("conexion.php");
$con = mysqli_connect($host, $user, $pass, $bd) or die('Fallo la conexion');
mysqli_set_charset($con, "utf8");

/*ACTUALIZAR DATOS
if (isset($_POST['updBtn'])) {
    updateProduct();
}*/

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
}*/


?>