<?php
    class homeModel{
        private $PDO;
        
        public function __construct()
        {
            require_once("c://xampp/htdocs/login/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }

        public function agregarNuevoUsuario($correo,$password,$nombre,$apellido,$dni){
            $statement = $this->PDO->prepare("INSERT INTO usuarios values(null,:correo, :password,:nombre,:apellido,:dni)");
            $statement->bindParam(":correo",$correo);
            $statement->bindParam(":password",$password);
            $statement->bindParam(":nombre",$nombre);
            $statement->bindParam(":apellido",$apellido);
            $statement->bindParam(":dni",$dni);
            try {
                $statement->execute();
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function obtenerclave($correo){
            $statement = $this->PDO->prepare("SELECT password FROM usuarios WHERE correo = :correo");
            $statement->bindParam(":correo",$correo);
            return ($statement->execute()) ? $statement->fetch()['password'] : false;
        }
    }

?>