<?php 
include_once("data-base-conection.php");
class Usuario
{
    private $nombre;
    private $paterno;
    private $materno;

    private $usuario;
    private $email;
    private $password;

    public function __construct($nombre, $paterno, $materno, $usuario, $email, $password){
        $this->nombre = $nombre;
        $this->paterno = $paterno;
        $this->materno = $materno;
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
        $query = "INSERT INTO `persona`(
                                        `usuario`,
                                        `nombre`, 
                                        `a_paterno`, 
                                        `a_materno`, 
                                        `correo`, 
                                        `password`,
                                        `privilegio`
                  )
                  VALUES(
                      '$this->usuario',
                      '$this->nombre', 
                      '$this->paterno', 
                      '$this->materno', 
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


class Proyecto{
    private $nombre;
    private $categoria;
    private $costo;
    private $descripcion;
    private $puntuacion;
    private $imagen;

    public function __construct($nombre, $categoria, $costo, $descripcion, $puntuacion, $imagen){
        $this->nombre = $nombre;
        $this->categoria = $categoria;
        $this->costo = $costo;     
        $this->descripcion = $descripcion;
        $this->puntuacion = $puntuacion;
        $this->imagen = $imagen;
    }
}
