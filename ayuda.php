<?php
//title
$tituloPagina = "Proyectos Asesorias - Ayuda";
$path_logo = "img/";
$path_css = "css/";
$path_js = "js/";
require_once("includes/header.php");
?>

<body>
    <header>
        <div class="row delete-margin-row-botton grey lighten-5">
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
            <div class="col m4 s12 center">
                <h1 id="titulo-pagina">Buap Proyect's</h1>
            </div>
            <!--Form login-->
            <div class="col m4 hide-on-med-and-down">
                <div class="row delete-margin-row-botton">
                    <form class="col s12" action="server/operations/login.php" method="POST" id="form-login">
                        <div class="row delete-margin-row-botton" id="cajas">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input type="email" name="usuario" class="validate" placeholder="mail@gmail.com" id="email" required>
                                <label for="user">Usuario</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">lock_open</i>
                                <input type="password" name="contrasenia" class="validate" id="password" required>
                                <label for="password">Contraseña</label>
                            </div>
                        </div>
                        <div class="row delete-margin-row-botton">
                            <div class="col s5 m6 l5 offset-m1 offset-l1" id="contrasenia-olvidada">
                                <p class="margin right-align medium-small valign-wrapper"><a href="#">¿Contraseña olvidada?</a></p>
                            </div>
                            <div class="col s3 m3 l3 offset-m4">
                                <p id="parrafo-checkbox">
                                    <label>
                                        <input type="checkbox" class="blue" id="recuerdame" />
                                        <span id="span-recuerdame">recordarme</span>
                                    </label>
                                </p>
                            </div>
                            <div class="col s4 m3 l3 offset-s2" id="button-access">
                                <button type="submit" name="login" value="accesando" class="btn waves-effect waves-light btn-small blue right">Acceder
                                    <i class="fas fa-sign-in-alt"></i>
                                </button>
                            </div>
                        </div>
                    </form>
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
                                <li><a href="proyectos.php" class="fuente-menu">Proyectos</a></li>
                                <li><a href="server/signup.php" class="blue-text waves-effect waves-red grey darken-4 btn"><span id="boton-registro">Registrarse</span></a>
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
                <li><a href="proyectos.php" class="blue-text">Proyectos</a></li>
                <li><a href="server/signup.php" class="blue-text waves-effect waves-red grey darken-4 btn"><span>Registrarse</span></a>
                <li><a href="ayuda.php" class="blue-text">Ayuda</a></li>
            </ul>
        </div>
    </div>
    <!--Renglon 2 columnas sidenav y contenido principal-->
    <div class="row" id="parent-row">
        <!--Seccion del Contenido Principal-->
        <section class="col s12 m12 l12 ">
            <section>
                <!--Main content-->
                <main>
                    <img class="materialboxed" src="img/under-construction1.jpg">
                </main>
                <!--Back to top page-->
                <div class="fixed-action-btn">
                    <a id="back-to-top" class="btn-floating btn-large yellow accent-4 scale-transition">
                        <i class="large material-icons">keyboard_arrow_up</i>
                    </a>
                </div>
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