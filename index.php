<?php
//title
$tituloPagina = "Asesorias - Principal";
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
        <!--Seccion de Menu navegacion lateral -->
        <section class="col m3 s12">
            <aside>
                <div class="row">
                    <!--Pushpin section-->
                    <div id="navegation-scroll" class="pushpin">

                        <div class="col hide-on-small-only m6 l6">
                            <ul class="section table-of-contents right-align">
                                <li class="left-align"><a href="#inversion">Inversion</a></li>
                                <li class="left-align"><a href="#caracteristicas">Caracteristicas</a></li>
                                <li class="left-align"><a href="#cajas-texto">Facilidades</a></li>
                                <li class="left-align"><a href="#acompaniamiento">Acompañamiento</a></li>
                                <li class="left-align"><a href="#mision">Visión</a></li>
                                <li class="left-align"><a href="#vision">Misión</a></li>
                                <li class="left-align"><a href="#acerca-de">Acerca de</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </section>
        <!--Seccion del Contenido Principal-->
        <section class="col m9 s12">
            <section>
                <!--Users and Proyects rank section-->
                <main id="main-index">

                    <div class="section-introduccion-texto">
                        <div class="row">
                            <div class="col s12 scrollspy" id="inversion">
                                <div class="grey-text text-darken-4">
                                    <!--Titulos principales-->
                                    <h1>Recupera tu inversión</h1>
                                </div>
                                <p>La mejor forma de recupera la inversión de los gastos hechos en Proyectos hechos y que después se vuelven inútiles al terminar el curso.</p>
                                <p> <a href="registro.php">Registrate</a> y empieza a subir tus proyectos.</p>
                            </div>
                            <div class="col s12 scrollspy" id="caracteristicas">
                                <div class="grey-text text-darken-4">
                                    <h1>Caracteristicas</h1>
                                </div>
                                <p>Puedes buscar y filtrar los datos de búsqueda para poder encontrar el proyecto que mas se acomode a tus necesidades.
                                    Califica a los usuarios, ponte en contacto con los autores de los proyectos para poder saber mas de los detalles del Proyecto de interés para tus cursos.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="section-cajas scrollspy center" id="cajas-texto">
                        <div class="row">
                            <div class="col s12 m6 l3 blue white-text caja">
                                <i class="material-icons medium">announcement</i>
                                <h5>¡Hooo si!</h5>
                                <p>Aprueba tu curso con estas gran idea</p>
                            </div>
                            <div class="col s12 m6 l3 purple white-text caja">
                                <i class="material-icons medium">attach_money</i>
                                <h5>Vende tus proyectos</h5>
                                <p>¿Piensas que tu dinero se há perdido? Que esperas vender tus proyectos. </p>
                            </div>
                            <div class="col s12 m6 l3 teal white-text caja">
                                <i class="material-icons medium">directions</i>
                                <h5>Asesorias Personalizadas</h5>
                                <p>Tengo dugas ¿Que hago?</p>
                                <p>Contacta y programa la cita con los autores para resolver tus dudas.</p>
                            </div>
                            <div class="col s12 m6 l3 orange white-text caja">
                                <i class="material-icons medium">beenhere</i>
                                <h5>Facilidades de pago</h5>
                                <p>Opciones a comveniencia, Oxxo, Paypal</p>
                                <p>Si lo deseas contacta al autor para poder acordar la forma de pago.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-acompaniamiento scrollspy" id="acompaniamiento">
                        <div class="grey-text text-darken-4">
                            <h1>Acompañamiento</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequatur reprehenderit, ratione veritatis a iste sit dolore numquam est sint architecto, facilis vel tempora itaque eos recusandae eius ea nulla!</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, totam aperiam praesentium debitis unde voluptates aut commodi iure vitae voluptas exercitationem soluta repudiandae ab voluptatem error laudantium facilis, dolore eveniet?Minus veritatis repellendus debitis accusantium ratione consequatur, beatae, dolorem corrupti quae perspiciatis sint delectus culpa maiores! Soluta quibusdam assumenda commodi id ut illum architecto harum possimus repellat! Fugiat, perspiciatis odio.</p>
                    </div>
                    <div class="section-acompaniamiento scrollspy" id="mision">
                        <div class="grey-text text-darken-4">
                            <h1>Visión</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequatur reprehenderit, ratione veritatis a iste sit dolore numquam est sint architecto, facilis vel tempora itaque eos recusandae eius ea nulla!</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, totam aperiam praesentium debitis unde voluptates aut commodi iure vitae voluptas exercitationem soluta repudiandae ab voluptatem error laudantium facilis, dolore eveniet?Minus veritatis repellendus debitis accusantium ratione consequatur, beatae, dolorem corrupti quae perspiciatis sint delectus culpa maiores! Soluta quibusdam assumenda commodi id ut illum architecto harum possimus repellat! Fugiat, perspiciatis odio.</p>
                    </div>
                    <div class="section-acompaniamiento scrollspy" id="vision">
                        <div class="grey-text text-darken-4">
                            <h1>Misión</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequatur reprehenderit, ratione veritatis a iste sit dolore numquam est sint architecto, facilis vel tempora itaque eos recusandae eius ea nulla!</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, totam aperiam praesentium debitis unde voluptates aut commodi iure vitae voluptas exercitationem soluta repudiandae ab voluptatem error laudantium facilis, dolore eveniet?Minus veritatis repellendus debitis accusantium ratione consequatur, beatae, dolorem corrupti quae perspiciatis sint delectus culpa maiores! Soluta quibusdam assumenda commodi id ut illum architecto harum possimus repellat! Fugiat, perspiciatis odio.</p>
                    </div>
                    <div class="section-acompaniamiento scrollspy" id="acerca-de">
                        <div class="grey-text text-darken-4">
                            <h1>Acerda de</h1>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequatur reprehenderit, ratione veritatis a iste sit dolore numquam est sint architecto, facilis vel tempora itaque eos recusandae eius ea nulla!</p>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima, totam aperiam praesentium debitis unde voluptates aut commodi iure vitae voluptas exercitationem soluta repudiandae ab voluptatem error laudantium facilis, dolore eveniet?Minus veritatis repellendus debitis accusantium ratione consequatur, beatae, dolorem corrupti quae perspiciatis sint delectus culpa maiores! Soluta quibusdam assumenda commodi id ut illum architecto harum possimus repellat! Fugiat, perspiciatis odio.</p>
                    </div>
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
    <!--Preloader-index.php-->
    <div class="preloader-background">
        <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="gap-patch">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p class="blinking">Cargando</p>
    </div>


    <!--Renglon Footer-->
    <footer class="page-footer red darken-4 valign-wrapper center">
        <div class="container">
            <p class="flow-text">&copy; 2018 Buap Proyect´s</p>
        </div>
    </footer>
</body>

<?php require_once("includes/footer.php"); ?>