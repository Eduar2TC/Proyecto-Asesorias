<?php
//title
$tituloPagina = "Asesorias - Usuario-Panel";
$path_logo = "../../img/";
$path_css = "../../css/";
$path_js = "../../js/";
$status_page = "user";
require_once("../../includes/header.php");
session_start();
?>

<body>
    <header>
        <div class="row valign-wrapper delete-margin-row-botton grey lighten-5">
            <!--Logo-->
            <div class="col m4 s12">
                <div class="row">
                    <a href="../../index.php">
                        <div class="col s3">
                            <img src="<?php echo $path_logo; ?>logo-02.png" alt="logo-principal" id="logo-img">
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
            </div>

        </div>
    </header>
    <!--Menu de navegación principal-->
    <div class="row" id="navegacion-menu">
        <div class="navbar">
            <nav data-target="nav-menu">

                <div class="nav-wrapper red darken-4">
                    <div id="contenedor" class="container">
                        <div class="right nav-wrapper">

                            <a href="index.php" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                            <ul class="right hide-on-small-and-down">
                                <li>Conectado: Juan López<i class="material-icons left Tiny green-text text-darken-4">radio_button_checked</i></li>
                                <li><a href="#" class="blue-text waves-effect waves-red grey darken-4 btn"><span id="boton-salir">Salir</span></a></li>
                                <li><a href="../../ayuda.php" class="fuente-menu">Ayuda</a></li>
                            </ul>
                        </div>
                    </div>
            </nav>
        </div>

        <!--Menu de navegacion Mobil -->

        <div class="row" id="navegacion-menu-movil">
            <ul class="sidenav" id="mobile-menu">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="../../img/office.jpg">
                        </div>
                        <a href="#user"><img class="circle" src="../../img/yuna.jpg"></a>
                        <a href="#name"><span class="white-text name">John Doe</span></a>
                        <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                    </div>
                </li>
                <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                <li><a href="#!">Second Link</a></li>
                <li>
                    <div class="divider"></div>
                </li>
                <li><a class="subheader">Subheader</a></li>
                <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
            </ul>
        </div>
    </div>
    <!--Renglon 2 columnas sidenav y contenido principal-->
    <div class="row" id="parent-row">
        <!--Seccion de Menu navegacion lateral -->
        <section class="col m3 s12">
            <aside id="filtro">
                <div class="row">
                    <div class="col s12">
                        <ul id="sidenav-2" class="sidenav sidenav-fixed pushpin">
                            <li>
                                <div class="user-view">
                                    <div class="background">
                                        <img src="../../img/office.jpg">
                                    </div>
                                    <a href="#user"><img class="circle" src="../../img/yuna.jpg"></a>
                                    <a href="#name"><span class="white-text name">John Doe</span></a>
                                    <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
                                </div>
                            </li>
                            </li>
                            <li><a class="subheader center-align">Perfil</a></li>
                            <li><a href="#!"><i class="material-icons">cloud</i>Ver mis datos</a></li>
                            <!---Open data users from database-->
                            <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">cloud</i><span class="indigo-text text-darken-4">Cambiar mis datos</span></a></li>
                            <li>
                                <div class="divider"></div>
                            </li>
                            <li><a class="subheader">Proyectos</a></li>
                            <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">cloud</i><span class="indigo-text text-darken-4">Mis Proyectos</span></a></li>
                            <li><a class="waves-effect waves-yellow" href="#"><i class="material-icons left">cloud</i><span class="indigo-text text-darken-4">Agregar Proyecto</span></a></li>
                            <div class="divider"></div>
                            </li>
                            <li><a class="subheader">Cuenta</a></li>
                            <li><a href="#" class="btn btn-small waves-red blue-text waves-effect waves-red grey darken-4 "><span id="boton-salir">Salir</span></a></li>
                        </ul>
                    </div>
                </div>
            </aside>
        </section>
        <!--Seccion del Contenido Principal-->
        <section class="col m9 s12">
            <section>
                <!--Users and Proyects rank section-->
                <main id="main-user" style="height:900px">


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

<?php require_once("../../includes/footer.php"); ?>