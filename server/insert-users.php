<?php 
include_once("data-base-conection.php");
class Alumno{
    public $matricula;
    private $nombre;
    private $paterno;
    private $materno;
    private $telefono;
    private $idCarrera;
    /**Get numeric in post data (1,2,3) */

    public function __construct($matricula, $nombre, $paterno, $materno, $telefono, $idCarrera){
        $this->matricula = $matricula;
        $this->nombre = $nombre;
        $this->paterno = $paterno;
        $this->materno = $materno;
        $this->telefono = $telefono;
        $this->idCarrera = $idCarrera;
    }

    public function getLastInsertKey(){ //innecesario
        $conection = $this->createConectionDb();
        $numberLastKeyQuery = "SELECT idUsuario FROM usuario ORDER BY IdUsuario DESC LIMIT 1";
        if ($number = $conection->query($numberLastKeyQuery) == true) {
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
    public function InsertarDatos(){
        $conection = $this->createConectionDb();
        $query = "INSERT INTO `alumno`(
                                        `matricula`,
                                        `nombre`, 
                                        `paterno`,
                                        `materno`,
                                        `telefono`,
                                        `carrera_idCarrera` /*get from post data*/
                  )
                  VALUES(
                      '$this->matricula', 
                      '$this->nombre', 
                      '$this->paterno',
                      '$this->materno',
                      '$this->telefono',
                      '$this->idCarrera'
                      )";

        if ($conection->query($query) == true) {
            $conection->close();
            return true;
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conection);
        }
    }

}

class Usuario{
    private $email;
    private $usuario;
    private $password;
    private $fk_MatriculaAlumno; //Get Foreing key Alumno on insert new Usuario

    public function __construct($email, $usuario, $password, $Alumno){
        $this->email = $email;
        $this->usuario = $usuario;
        $this->password = $this->passwordHash($password);
        $this->fk_MatriculaAlumno= $Alumno->matricula;   //Initiaice from Foreing key alumno
     }
    public function passwordHash($password){
        $hash = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
        return $hash;
    }
    public function InsertarDatos(){
        $conection_instance = new Conexion;
        $conexion = $conection_instance->conectarBD();
        $query = "INSERT INTO `usuario`(
                                        `email`,
                                        `user`, 
                                        `password`,
                                        `alumno_matricula`
                  )
                  VALUES(
                      '$this->email', 
                      '$this->usuario', 
                      '$this->password',
                      '$this->fk_MatriculaAlumno'
                      )";
                      
        if ($conexion->query($query) == true) {
            $conexion->close();
            return true;
        } else {
            echo "Error: " . $query. "<br>" . mysqli_error($conexion);
        }

    }
}

class HumanRobot{
    private $publicKey = "6LdQipsUAAAAAAeBMkLqvcJgiATBo-k8q_rxrKZd";
    private $secretKey = "6LdQipsUAAAAAFnlNdepXm89ls7YShEGWvzSW4CV";
    private $url = "https://www.google.com/recaptcha/api/siteverify";

    public function getPublicKey()
    {
        return $this->publicKey;
    }
    public function getSecretKey()
    {
        return $this->secretKey;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function responseRecaptcha($response_key)
    {
        $response = file_get_contents($this->getUrl() . "?secret=" . $this->getSecretKey() . "&response=" . $response_key . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
        $response = json_decode($response);
        return $response->success;
    }
}

class Main{
    private $alumno;
    private $usuario;

    public function main(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            if($_POST['acepto-terminos'] == 'Si' && (new HumanRobot)->responseRecaptcha($_POST['g-recaptcha-response']) == '1'){

                $this->alumno = new Alumno($_POST['matricula'], $_POST['nombre-alumno'], $_POST['paterno'], $_POST['materno'], $_POST['telefono'], $_POST['id-carrera']);
                $this->usuario = new Usuario($_POST['email'], $_POST['usuario'], $_POST['password'], $this->alumno);
                
                if( $this->alumno->InsertarDatos() == true && $this->usuario->InsertarDatos() == true){
                    echo "Datos del nuevo usuario agregado exitosamente!";
                }
                else{
                    echo "Error al intentar agregar nuevo usuario!";
                }
            }
            else{
                echo "No es posible el registro; no aceptaste los terminos. Y no rellenaste el capcha!";
            }
            
        }
    }
}
//Fisrt generate data from login after insert data of alumno
//$principal = new Main();
//$principal->main();
echo $_POST['acepto-terminos'];
echo(new HumanRobot)->responseRecaptcha($_POST['g-recaptcha-response']);