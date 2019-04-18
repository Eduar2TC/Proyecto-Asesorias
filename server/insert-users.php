<?php 
include_once("data-base-conection.php");
class Alumno{
    private $matricula;
    private $nombre;
    private $paterno;
    private $materno;
    private $telefono;
    private $idCarrera;  /**Get numeric in post data (1,2,3) */
    private $idUsuario; /*User data acces to system (get last id insertded)*/

public function __construct($matricula, $nombre, $paterno, $materno, $telefono, $idCarrera, $idUsuario){
        $this->matricula = $matricula;
        $this->nombre = $nombre;
        $this->paterno = $paterno;
        $this->materno = $materno;
        $this->telefono = $telefono;
        $this->idCarrera = $idCarrera;
        $this->idUsuario = $idUsuario;
    }

    public function getLastInsertKey(){
        $conection = $this->createConectionDb();
        $numberLastKeyQuery = "SELECT idUsuario FROM usuario ORDER BY IdUsuario DESC LIMIT 1";
        if ($number = $conection->query( $numberLastKeyQuery) == true) {
            return $number;
            $conection->close();
        } else {
            echo "Error: " . $numberLastKeyQuery . "<br>" . mysqli_error($conection);
        }
    }
    public function createConectionDb(){
        $conection_instance = new Conexion;
        $conexion = $conection_instance->conectarBD();
        return $conexion;
    }
    public function InsertarDatos()
    {
        $conection = $this->createConectionDb();
        $query = "INSERT INTO `usuario`(
                                        `usuario`,
                                        `correo`, 
                                        `password`
                  )
                  VALUES(
                      '$this->usuario', 
                      '$this->email', 
                      '$password_hashed',
                      2
                      )";

        if ($conexion->query($query) == true) {
            $conexion->close();
            return true;
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conexion);
        }
    }
    

}
class Usuario
{

    private $usuario;
    private $email;
    private $password;

    public function __construct($usuario, $email, $password){
        $this->usuario = $usuario;
        $this->email = $email;
        $this->password = $password;
     }
    public function passwordHash(){
        $hash = password_hash($this->password, PASSWORD_BCRYPT, ['cost' => 10]);
        return $hash;
    }
    public function InsertarDatos(){
        $conection_instance = new Conexion;
        $conexion = $conection_instance->conectarBD();
        $password_hashed = $this->passwordHash();
        $query = "INSERT INTO `usuario`(
                                        `usuario`,
                                        `correo`, 
                                        `password`
                  )
                  VALUES(
                      '$this->usuario', 
                      '$this->email', 
                      '$password_hashed',
                      2
                      )";
                      
        if ($conexion->query($query) == true) {
            $conexion->close();
            return true;
        } else {
            echo "Error: " . $query. "<br>" . mysqli_error($conexion);
        }

    }
}
//Fisrt generate data from login after insert data of alumno