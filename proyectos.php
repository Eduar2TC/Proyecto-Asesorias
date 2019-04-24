<?php
//title
$tituloPagina = "Proyectos Asesorias - Proyectos";
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
                <li><a href="signup.php" class="blue-text waves-effect waves-red grey darken-4 btn"><span>Registrarse</span></a>
                <li><a href="ayuda.php" class="blue-text">Ayuda</a></li>
            </ul>
        </div>
    </div>
    <!--Renglon 2 columnas sidenav y contenido principal-->
    <div class="row" id="parent-row">
        <!--Seccion Sidenav-->
        <section class="col m3 s12">
            <aside id="filtro">
                <!--Filter-->
                <div class="row">
                    <ul id="sidenav-1" class="sidenav sidenav-fixed pushpin">
                        <li><a class="subheader center">Filtrar Proyectos</a></li>
                        <li class="no-padding">
                            <ul class="collapsible">
                                <li>
                                    <a href="#" class="collapsible-header">Proyectos <i class="material-icons">arrow_drop_down</i></a>
                                    <div class="collapsible-body">
                                        <form action="#!">
                                            <!--Request filter-->
                                            <p>
                                                <label>
                                                    <input type="checkbox" class="blue" name="popularidad" id="proyecto-popular"><span>Popularidad</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" class="blue" name="alfabetico" id="proyecto-alfabetico"><span>A-Z</span>
                                                </label>
                                            </p>
                                        </form>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="collapsible-header">Asesorias <i class="material-icons">arrow_drop_down</i></a>
                                    <div class="collapsible-body">
                                        <form action="#!">
                                            <!--Request filter-->
                                            <p>
                                                <label>
                                                    <input type="checkbox" class="blue" name="popularidad" id="asesoria-popular"><span>Popularidad</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" class="blue" name="alfabetico" id="asesoria-alfabetico"><span>A-Z</span>
                                                </label>
                                            </p>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>

                        <!--Add more lines filter-->
                    </ul>
                </div>
            </aside>
        </section>
        <!--Seccion Contenido principal-->
        <section class="col m9 s12">
            <!--Users and Proyects rank section-->
            <main class="row" id="main-proyects">
                <!--Titulo-->
                <div class="row titulo">
                    <div class="col s12 blue accent-3">
                        <div class="center-align">
                            <h4 class="white-text darken-2">Proyectos</h4>
                        </div>
                    </div>
                </div>
                <!--Renglond de 3 targetas-->
                <div class="row">
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-header">
                                <img src="img/proyecto01.png" alt="">
                            </div>
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="" alt="" class="activator" />
                            </div>
                            <div class="card-content">
                                <h3 id="nombre-proyecto">Nombre del proyecto</h3>
                                <div class="elemento">
                                    <h4>Categoria: </h4><span id="categoria">
                                        Hardware
                                    </span>
                                </div>
                                <div class="elemento">
                                    <h4>Autor: </h4><span id="autor">
                                        Jose Lopez
                                    </span>
                                </div>
                                <div class="elemento">
                                    <h4>Costo: </h4><span id="costo">
                                        $1,500.50
                                    </span>
                                </div>
                                <div class="elemento">
                                    <h4>Puntuacion: </h4><span id="puntuacion">
                                        5 stars
                                    </span>
                                </div>
                                <span class="card-title activator">
                                    <i class="material-icons right">more_vert</i>
                                </span>
                                <p><a href="#">Detalles del proyecto</a></p>
                            </div>
                            <div class="card-action">
                                <a href="#">Comprar</a>
                                <a href="#">Pedir información</a>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title activator">Descripción del proyecto<i class="material-icons right">close</i></span>
                                <p>blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla </p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-header">
                                <img src="img/proyecto01.png" alt="">
                            </div>
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="" alt="" class="activator" />
                            </div>
                            <div class="card-content">
                                <h3 id="nombre-proyecto">Nombre del proyecto</h3>
                                <div class="elemento">
                                    <h4>Categoria: </h4><span id="categoria">
                                        Hardware
                                    </span>
                                </div>
                                <div class="elemento">
                                    <h4>Autor: </h4><span id="autor">
                                        Jose Lopez
                                    </span>
                                </div>
                                <div class="elemento">
                                    <h4>Costo: </h4><span id="costo">
                                        $1,500.50
                                    </span>
                                </div>
                                <div class="elemento">
                                    <h4>Puntuacion: </h4><span id="puntuacion">
                                        5 stars
                                    </span>
                                </div>
                                <span class="card-title activator">
                                    <i class="material-icons right">more_vert</i>
                                </span>
                                <p><a href="#">Detalles del proyecto</a></p>
                            </div>
                            <div class="card-action">
                                <a href="#">Comprar</a>
                                <a href="#">Pedir información</a>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title activator">Descripción del proyecto<i class="material-icons right">close</i></span>
                                <p>blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla </p>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4 l4">
                        <div class="card">
                            <div class="card-header">
                                <img src="img/proyecto01.png" alt="">
                            </div>
                            <div class="card-image waves-effect waves-block waves-light">
                                <img src="" alt="" class="activator" />
                            </div>
                            <div class="card-content">
                                <h3 id="nombre-proyecto">Nombre del proyecto</h3>
                                <div class="elemento">
                                    <h4>Categoria: </h4><span id="categoria">
                                        Hardware
                                    </span>
                                </div>
                                <div class="elemento">
                                    <h4>Autor: </h4><span id="autor">
                                        Jose Lopez
                                    </span>
                                </div>
                                <div class="elemento">
                                    <h4>Costo: </h4><span id="costo">
                                        $1,500.50
                                    </span>
                                </div>
                                <div class="elemento">
                                    <h4>Puntuacion: </h4><span id="puntuacion">
                                        5 stars
                                    </span>
                                </div>
                                <span class="card-title activator">
                                    <i class="material-icons right">more_vert</i>
                                </span>
                                <p><a href="#">Detalles del proyecto</a></p>
                            </div>
                            <div class="card-action">
                                <a href="#">Comprar</a>
                                <a href="#">Pedir información</a>
                            </div>
                            <div class="card-reveal">
                                <span class="card-title activator">Descripción del proyecto<i class="material-icons right">close</i></span>
                                <p>blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla </p>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
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