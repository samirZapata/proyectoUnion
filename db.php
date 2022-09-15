<?php

class Database{
    private $host = "localhost";
    private $db_name = "practica";
    private $username = "root";
    private $password = "";
    public $con;

    function conectar(){

        try{
           $conexion = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;
           $options = [
               //GENERA ERROR EN CASO DE QUE SUCEDA ALGO CON LA CONEXION
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false, //NO SE EMULA PREPARES, CONSULTAS REALES Y SEGURAS
              ];

              $pdo = new PDO($conexion, $this->username, $this->password, $options);
              return $pdo;
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
    }
}

?>