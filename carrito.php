<?php
    
    include 'config.php';

    //RECIBIMOS LOS DATOS DEL FORMULARIO
    if(isset($_POST['id'])){

        $id = $_POST['id'];
        $token = $_POST['token'];

        //CIFRAMOS EL TOKEN PARA QUE LOS DATOS QUE ESTAMOS RECIBIENDO NO SEAN ADULTERADOS
        $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
        //VALIDAMOS SI EL TOKEN ES CORRECTO
        if($token == $token_tmp){

            //VERIFICAMOS SI EL ID QUE ENVIA EL USER EXISTE
            if(isset($_SESSION['carrito']['productos'][$id])){
                $_SESSION['carrito']['productos'][$id] += 1;
            }else{
                $_SESSION['carrito']['productos'][$id] = 1;
            }

            //CONTAMOS LA CANTIDAD DE PRODUCTOS QUE TIENE EL CARRITO
            $datos['numero'] = count($_SESSION['carrito']['productos']);
            $datos['ok'] = true;

        }else{
            $datos['ok'] = false;
        }

    }else{
        //SI NO ESTAMOS RECIBIENDO DATOS RESPONDE FALSE
       $datos['ok'] = false;
    }

    echo json_encode($datos);

?>