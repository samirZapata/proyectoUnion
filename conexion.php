<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "practica";

        
        $con = mysqli_connect($host, $user, $pass,$bd);
        $alert = '<script language="javascript">alert("Conexion exitosa!");</script>';
        
        if (!$con) {
            die("Connection failed: " . mysqli_connect_error());
        }
        /*
        $sql="SELECT * FROM datos";

        if(mysqli_query($con, $sql)){
            $con = mysqli_connect($host, $user, $pass);
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }
        */


    mysqli_select_db($con, $bd);
    return $con;

?>
