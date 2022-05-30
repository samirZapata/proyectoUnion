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
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
              ];

              $pdo = new PDO($conexion, $this->username, $this->password, $options);
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $pdo;
    }
}

?>