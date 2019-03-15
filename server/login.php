<?php

if (isset($_POST["usuario"]) && !empty($_POST["contrasenia"])) {
    echo "Hola, ". $_POST["usuario"]." tu password es : ". $_POST["contrasenia"];
} else {
    echo "Datos no recibidos";
}


?>