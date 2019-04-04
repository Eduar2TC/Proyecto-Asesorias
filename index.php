<?php
//title page
$tituloPagina = "Asesosrias - Principal";
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
                    <form class="col s12" action="server/login.php" method="POST">
                        <div class="row delete-margin-row-botton" id="cajas">
                            <div class="input-field col s6">
                                <i class="material-icons prefix">account_circle</i>
                                <input type="email" name="usuario" class="validate" placeholder="mail@gmail.com" id="email">
                                <label for="user">Usuario</label>
                            </div>
                            <div class="input-field col s6">
                                <i class="material-icons prefix">lock_open</i>
                                <input type="password" name="contrasenia" class="validate" id="password">
                                <label for="password">Contraseña</label>
                            </div>
                        </div>
                        <div class="row delete-margin-row-botton">
                            <div class="col s3 offset-s5">
                                <p id="parrafo-checkbox">
                                    <label>
                                        <input type="checkbox" class="blue" id="recuerdame" />
                                        <span id="span-recuerdame">recordarme</span>
                                    </label>
                                </p>
                            </div>
                            <div class="col s4 offset-2" id="button-access">
                                <button class="btn waves-effect waves-light btn-small blue right" type="submit" name="action">Acceder
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
                                <li><a href="proyectos.php" class="fuente-menu">Proyectos</a></li>
                                <li><a href="precios.php" class="fuente-menu">Asesorias</a></li>
                                <li><a href="registro.php" class="fuente-menu">Registro</a></li>
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
                <li><a href="asesorias.php" class="blue-text">Asesorias</a></li>
                <li><a href="registro.php" class="blue-text">Registro</a></li>
                <li><a href="ayuda.php" class="blue-text">Ayuda</a></li>
            </ul>
        </div>
    </div>
    <!--Renglon 2 columnas aside y contenido principal-->
    <div class="row" id="parent-row">
        <div class="col m3 s12">
            <aside id="filtro">
                <!--Filter-->
                <div class="row">
                    <ul id="sidenav-1" class="sidenav sidenav-fixed pushpin">
                        <li><a class="subheader center">Filtrar Proyectos
                                <div id="notification"></div>
                            </a>
                        </li>
                        <li class="no-padding">
                            <ul class="collapsible">
                                <li>
                                    <a href="#" class="collapsible-header">Proyectos <i class="material-icons">arrow_drop_down</i></a>
                                    <div class="collapsible-body">
                                        <form action="#!">
                                            <!--Request filter-->
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="popularidad" id="proyecto-popular"><span>Popularidad</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="alfabetico" id="proyecto-alfabetico"><span>A-Z</span>
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
                                                    <input type="checkbox" name="popularidad" id="asesoria-popular"><span>Popularidad</span>
                                                </label>
                                            </p>
                                            <p>
                                                <label>
                                                    <input type="checkbox" name="alfabetico" id="asesoria-alfabetico"><span>A-Z</span>
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
        </div>
        <div class="col m9 s12">
            <section>
                <!--Users and Proyects rank section-->
                <main>
                    <!--Titulo principal-->
                    <div class="row center">
                        <div class="col s12">
                            <div class="grey-text text-darken-4">
                                <h1>Usuarios mejores ranqueados</h1>
                            </div>
                            <span>Usuarios con los proyectos estudiantiles mejores rankeados en todas las categorías</span>
                        </div>
                    </div>
                    <!--Renglond e targetas-->
                    <div class="row" id="principal-content">
                        <div class="row">
                            <div class="col s12 m4">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img src="" alt="" class="activator" />
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator">Card Title<i class="material-icons right">more_vert</i></span>
                                        <p><a href="#">This is a link</a></p>
                                    </div>
                                    <div class="card-action">
                                        <a href="#">This is a link</a>
                                        <a href="#">This is a link</a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title activator">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img src="" alt="" class="activator" />
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator">Card Title<i class="material-icons right">more_vert</i></span>
                                        <p><a href="#">This is a link</a></p>
                                    </div>
                                    <div class="card-action">
                                        <a href="#">This is a link</a>
                                        <a href="#">This is a link</a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title activator">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card">
                                    <div class="card-image waves-effect waves-block waves-light">
                                        <img src="" alt="" class="activator" />
                                    </div>
                                    <div class="card-content">
                                        <span class="card-title activator">Card Title<i class="material-icons right">more_vert</i></span>
                                        <p><a href="#">This is a link</a></p>
                                    </div>
                                    <div class="card-action">
                                        <a href="#">This is a link</a>
                                        <a href="#">This is a link</a>
                                    </div>
                                    <div class="card-reveal">
                                        <span class="card-title activator">Card Title<i class="material-icons right">close</i></span>
                                        <p>Here is some more information about this product that is only revealed once clicked on.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m4">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="https://s-media-cache-ak0.pinimg.com/originals/3b/f0/77/3bf0775b0d234545d14a5941be966ab2.jpg" />
                                    </div>
                                    <div class="card-content">
                                        <h3>Frank the Pug</h3>
                                        <h4>The sexiest "Men (dog) in Black" </h4>
                                        <p>And now you're back from outer space, / I just walked in to find you here with that sad look upon your face, / I should've changed that stupid lock, I should have made you leave your key, / If I'd have known for just one second you'd be back to bother me. / Go on, now go! Walk out the door...</p>
                                    </div>
                                    <div class="card-footer">
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-codepen"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-stack-overflow"></i></a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-github"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4"></div>
                            <div class="col s12 m4"></div>
                        </div>
                    </div>

                </main>
            </section>
        </div>
    </div>
    <!--Renglon Footer-->
    <footer class="page-footer red darken-4 valign-wrapper center">
        <div class="container">
            <p class="flow-text">&copy; 2018 Buap Proyect´s</p>
        </div>
    </footer>
</body>

<?php require_once("includes/footer.php"); ?>