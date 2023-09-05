<?php 

    class Conexion{
        private $server="localhost";
        private $user="root";
        private $pwd="";
        private $db="adopcion";
        private $charset= "utf8";

        
        function conectar(){
            $server="localhost";
            $user="root";
            $pwd="";
            $db="adopcion";
            $charset= "utf8";
            // conectarse a la bd
            $conn = mysqli_connect($server, $user, $pwd, $db);
            if (mysqli_connect_errno()) {
                die("Connection failed: ".mysqli_connect_error());
            } 
            return $conn;
        }

        /*function conectar(){
            try{
                $conexion = "mysql:host=".$this->server.";dbname=".$this->db.";charset=".$this->charset;

                $options = [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_EMULATE_PREPARES => false,
                ];

                $pdo = new PDO($conexion, $this->user, $this->pwd, $options);

                return $pdo;

            }catch(PDOException $e){
                echo 'Error de conexión: '.$e->getMessage();
                exit;
            }
        }*/
    }

?>
