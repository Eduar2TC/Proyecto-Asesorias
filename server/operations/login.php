<?php
include_once("data-base-conection.php");


class Login{
    private $user;
    private $password;

    public function __construct($usuario, $password){
        $this->user = $usuario;
        $this->password = $password;
    }
    public function creaConexionBd () {
    return $conexion = (new Conexion)->conectarBD();
    }

    public function getUser(){
        return $this->user;
    }
    public function getPass(){
        return $this->password;
    }

    public function searchUser($user, $password){
        $conection = $this->creaConexionBd();
        $query = "SELECT * FROM `usuario` WHERE `email` = '$this->user'";
        if ($result = $conection->query($query)) {
            $fila = $result->fetch_assoc();
            //name encontrado and password correct
            if($result->num_rows == 1 && password_verify($password, $fila['password'])){
                $conection->close();
                return true;
            }
            else{
                return false;
            }
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conection);
            return false;
        }
    }

}

class Main{
    private $conexion;

    public function __construct()
    {

    }
    public function creaConexionBd(){
        return $conexion = (new Conexion)->conectarBD();
    }

    public function main(){
        //Funcion que recibe los datos de acceso
        $conexion = $this->creaConexionBd(); // creacion de la conexion a la bd
        if( !empty($_POST)){

            if(isset($_POST['login'])){

                $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
                $password = mysqli_real_escape_string($conexion, $_POST['contrasenia']);
                $newUser = new Login($user, $password);
                
                if($newUser->searchUser($user, $password) == true){
                    echo "Bienvenido :v";
                    session_start();
                    $_SESSION['login'] = 'success';
                    $_SESSION['user'] = $user;
                    header('Refresh:2 ; url=../user-view/user.php');
                }
                else{
                    echo "usuario o contraseña inválida";
                }

            }
        } 
        else {
            echo "Datos no enviados";
        }
    }
}
$main = new Main();
$main->main();
?>