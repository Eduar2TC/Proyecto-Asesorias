<?php 
include_once("data-base-conection.php");

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
    public function convertImageToBase64(){
        $path = 'myfolder/myimage.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);        
    }
    public function insertNewProyecto(){
        $conexionInstance = new Conexion();
        $conexion = $conexionInstance->conectarBD();
        $query = " INSERT INTO `proyecto`(
                               `nombre`,
                               `categoria`,
                               `costo`,
                               `descripcion`,
                               `puntuacion`,
                               `imagen`
                    ) VALUES(
                        '$this->nombre',
                        '$this->categoria',
                        '$this->costo',
                        '$this->descripcion',
                        '$this->puntuacion',
                        '$this->imagen'
                    )";
        if ($conexion->query($query) == true) {
            $conexion->close();
            return true;
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conexion);
        }
    }
}
