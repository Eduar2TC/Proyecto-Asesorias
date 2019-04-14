<?php
//title
$tituloPagina = "Asesorias - Principal";
require_once("includes/header.php");
?>

<body>
    <header>
        <div class="row valign-wrapper delete-margin-row-botton grey lighten-5">
            <!--Logo-->
            <div class="col m4 s12">
                <div class="row">
                    <a href="index.php">
                        <div class="col s3">
                            <img src="img/logo-02.png" alt="logo-principal" id="logo-img">
                        </div>
                        <div class="col s9">
                            <div class="row">
                                <span id="titulo-logo">Proyectos y Asesorias</span>
                            </div>
                            <div class="row">
                                <p id="parrafo-logo" class="blue-text text-darken-2">¡Facilidades de estudio hoy, mañana y siempre!</p>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
            <!--Tittle web-page-->
            <div class="col m8 s12">
                <div class="row no-margin">
                    <div class="col s12 center">
                        <h1 id="titulo-pagina">Buap Proyect's</h1>
                    </div>
                </div>
                <div class="row no-margin">
                    <div class="col s12 right-align">
                        <h5 class="no-margin">Bienvenido: <span class="usuario-name">Juan de la Madrid Perez</span></h5>
                    </div>
                </div>
            </div>

        </div>
    </header>
    <!--Menu de navegación principal-->
    <div class="row" id="navegacion-menu">
        <div class="navbar">
            <nav data-target="nav-menu">

                <div class="nav-wrapper red darken-4">
                    <div id="contenedor" class="container">
                        <div class="nav-wrapper">

                            <a href="index.php" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                            <ul class="hide-on-small-and-down">
                                <li><a href="index.php" class="fuente-menu">Inicio</a></li>
                                <li><a href="proyectos.php" class="fuente-menu">Mis Proyectos</a></li>
                                <li><a href="registro.php" class="blue-text waves-effect waves-red grey darken-4 btn"><span id="boton-registro">Salir</span></a>
                                </li>
                                <li><a href="ayuda.php" class="fuente-menu">Ayuda</a></li>
                            </ul>
                            <ul class="hide-on-small-and-down">

                            </ul>
                        </div>
                    </div>
            </nav>
        </div>

        <!--Menu de navegacion Mobil -->

        <div class="row" id="navegacion-menu-movil">
            <ul class="sidenav" id="mobile-menu">
                <li><a href="index.php" class="blue-text">Inicio</a></li>
                <li><a href="registro.php" class="blue-text">Proyectos</a></li>
                <li><a href="#registro.php" class="blue-text waves-effect waves-red grey darken-4 btn"><span>Registrarse</span></a>
                <li><a href="ayuda.php" class="blue-text">Ayuda</a></li>
            </ul>
        </div>
    </div>
    <!--Renglon 2 columnas sidenav y contenido principal-->
    <div class="row" id="parent-row">
        <!--Seccion de Menu navegacion lateral -->
        <section class="col m3 s12">
            <aside>
                <div class="row">
                    <!--Pushpin section-->
                    <div id="navegation-scroll" class="pushpin">
                        

                    </div>
                </div>
            </aside>
        </section>
        <!--Seccion del Contenido Principal-->
        <section class="col m9 s12">
            <section>
                <!--Users and Proyects rank section-->
                <main id="main-index">


                </main>
            </section>
        </section>
    </div>
    <!--Renglon Footer-->
    <footer class="page-footer red darken-4 valign-wrapper center">
        <div class="container">
            <p class="flow-text">&copy; 2018 Buap Proyect´s</p>
        </div>
    </footer>
</body>

<?php require_once("includes/footer.php"); ?>