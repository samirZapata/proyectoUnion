<?php

    include 'config.php';
    include 'db.php';

    //VALIDAMOS LO QUE NOS ESTAN ENVIANDO POR EL METODO POST
    if(isset($_POST['action'])){
        $action = $_POST['action'];
        $id = isset($_POST['id']) ? $_POST['id'] : 0;

        //SI LA VARIABLE ACTION ES IGUAL A LA OP DE AGREGAR THEN RECIBIMOS LA CANTIDAD A AGREGAR
        if($action == 'agregar'){
            $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : 0;
            $respuesta = agregar($id, $cantidad);

            if ($respuesta > 0) {
                $datos['OK'] = true;
            }else{
                $datos['OK'] = false;
            }
            $datos['sub'] = MONEDA . number_format($respuesta, 2, '.', ',');
        } else if($action == 'eliminar'){
            $datos['ok'] = eliminar($id);
        } else {
            $datos['OK'] = false;
        }
    }else{
        $datos['OK'] = false;
    }

    echo json_encode($datos);

function agregar($id, $cantidad){
    $res = 0;
    if($id > 0 && $cantidad > 0 && is_numeric($cantidad)){
        //VALIDAMOS QUE EL ID DEL PRODUCTO EXISTA
        if (isset($_SESSION['carrito']['productos'][$id])) {
            $_SESSION['carrito']['productos'][$id] = $cantidad; //PASAMOS CANTIDAD PARA QUE ACTUALICE EL CARRITO
            
            $db = new Database();
            $con = $db->conectar();

            $sql = $con->prepare("SELECT  precio FROM productos WHERE id = ?");
                $sql->execute([$id]);
                $row = $sql->fetch(PDO::FETCH_ASSOC);
                $precio = $row['precio'];
                $res = $cantidad * $precio;
                
                return $res;
        }
    }else {
        return $res;
    }
}

function eliminar($id){
    if($id > 0){
        
        if (isset($_SESSION['carrito']['productos'][$id])) {
           unset($_SESSION['carrito']['productos'][$id]); //ELIMINAMOS EL PRODUCTO DEL CARRITO
           return true;
        }

    }else {
        return false;
    }
    
}

?>