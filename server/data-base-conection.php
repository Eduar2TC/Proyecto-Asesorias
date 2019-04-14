<?php
    class Conexion{
        private $host;
        private $username;
        private $password;
        private $dabaBase;

    function __construct(){

        $this->host="localhost";
        $this->username = "root";
        $this->password = "ACM1PT";
        $this->dataBase = "proyectos_asesorias";
    }
        public function conectarBD(){
            $conexion = new mysqli($this->host, $this->username, $this->password, $this->dataBase);

            /* verificar la conexión */
            if (mysqli_connect_errno()) {
                printf("Falla de la conexión : %s\n", $mysqli->connect_error);
                exit();
            } else {
                return $conexion;
                /* liberar la serie de resultados */
                $resultado->free();
                /* cerrar la conexión */
                $mysqli->close();
            }
        }
    }
?>