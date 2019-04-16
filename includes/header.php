<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="<?php echo $path_logo; ?>logo-02.png">
    <link rel="stylesheet" href="<?php echo $path_css; ?>materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Comfortaa|Pacifico|Permanent+Marker|Josefin+Slab|Boogaloo" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $path_css; ?>my-styles.css">
    <link rel="stylesheet" href="<?php echo $path_css; ?>user.css">
    <link rel="stylesheet" href="
                            <?php
                            if (isset($status_page)) {
                                if ($status_page == "signup") {

                                    $estado_pagina_actual = $status_page;
                                } else if ($status_page == "user") {
                                    $estado_pagina_actual = $status_page;
                                }
                            }
                            echo $path_css . $estado_pagina_actual . '.css';
                            ?>
    ">
    <title><?php echo $tituloPagina; ?></title>
</head>