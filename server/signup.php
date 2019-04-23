<?php
//title
$tituloPagina = "Proyectos Asesorias - Registro";
$path_logo = "../img/";
$path_css = "../css/";
$path_js = "../js/";
$status_page = "signup";
require_once("../includes/header.php");
require_once("insert-users.php");
?>

<body>
    <header>
        <div class="row delete-margin-row-botton grey lighten-5">
            <!--Logo-->
            <div class="col m4 s12">
                <div class="row">
                    <a href="../index.php">
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
                    <form class="col s12" action="login.php" method="POST" id="form-login">
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

                            <a href="../index.php" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                            <ul class="hide-on-small-and-down">
                                <li><a href="../index.php" class="fuente-menu">Inicio</a></li>
                                <li><a href="../proyectos.php" class="fuente-menu">Proyectos</a></li>
                                <li><a href="signup.php" class="blue-text waves-effect waves-red grey darken-4 btn"><span id="boton-registro">Registrarse</span></a>
                                </li>
                                <li><a href="../ayuda.php" class="fuente-menu">Ayuda</a></li>
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
                <li><a href="../index.php" class="blue-text">Inicio</a></li>
                <li><a href="../proyectos.php" class="blue-text">Proyectos</a></li>
                <li><a href="signup.php" class="blue-text waves-effect waves-red grey darken-4 btn"><span>Registrarse</span></a>
                <li><a href="../ayuda.php" class="blue-text">Ayuda</a></li>
            </ul>
        </div>
    </div>

    <!--Formulario de registro-->
    <div class="row" id="login-page">
        <div class="col s12 z-depth-6 card-panel">
            <form action="insert-users.php" method="POST" id="formulario-registro">
                <div class="row">
                    <div class="col s12 blue">
                        <h5 class="center">Datos Personales</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">account_circle</i>
                        <input class="validate" id="nombre" name="nombre-alumno" type="text" validate="name">
                        <label for="nombre" data-error="wrong" data-success="right">Nombre</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">phone</i>
                        <input class="validate" id="telefono" name="telefono" type="text" validate="phone">
                        <label for="telefono" data-error="wrong" data-success="right">Telefono</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                        <input class="validate" id="paterno" name="paterno" type="text" validate="max-min-length">
                        <label for="paterno" data-error="wrong" data-success="right">Paterno</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">text_format</i>
                        <input class="validate" id="materno" name="materno" type="text" validate="max-min-length">
                        <label for="materno" data-error="wrong" data-success="right">Materno</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">format_list_numbered</i>
                        <input class="validate" id="matricula" name="matricula" type="text" validate="matricula">
                        <label for="matricula" data-error="wrong" data-success="right">Matricula</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <select name="id-carrera" class="validate">
                            <option value="" disabled selected>Selecciona una Categoria</option>
                            <option value="1">LCC</option>
                            <option value="2">ICC</option>
                            <option value="3">ITI</option>
                        </select>
                        <label>Carrera a la que perteneces</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 blue">
                        <h5 class="center">Datos de Acceso</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">person_add</i>
                        <input class="validate" id="usuario-reg" name="usuario" type="text" type="text" validate="username">
                        <label for="usuario-reg" data-error="wrong" data-success="right">Usuario</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">mail_outline</i>
                        <input class="validate" id="email-reg" name="email" type="email" validate="email">
                        <label for="email-reg" data-error="wrong" data-success="right">Email</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="password-reg" name="password" type="password" class="must_match" validate="contrasenia">
                        <label for="password-reg">Contraseña</label>
                    </div>
                    <div class="input-field col s12 m6 l6">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="re-password-reg" type="password" validate="match:.must_match">
                        <label for="re-password-reg">Confirmar contraseña</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12  login-text">
                        <p>
                            <label>
                                <input type="checkbox" class="blue" id="acepto-terminos" name="acepto-terminos" value="Si" required />
                                <span id="acepto-terminos">Acepto los terminos</span>
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <div class="g-recaptcha" data-sitekey="<?php echo (new HumanRobot)->getPublicKey(); ?>" data-callback="recaptchaCallback"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <button type="submit" id="submitButton" class="btn blue waves-effect waves-light col s12" disabled>
                            Registrarse
                        </button>
                    </div>
                    <div class="input-field col s12">
                        <p class="margin center medium-small sign-up">Ya tengo cuenta <a href="#login.php" id="ya-tengo-cuenta">Login</a></p>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <!--Renglon Footer-->
    <footer class="page-footer red darken-4 valign-wrapper center">
        <div class="container">
            <p class="flow-text">&copy; 2018 Buap Proyect´s</p>
        </div>
    </footer>
</body>

<?php require_once("../includes/footer.php"); ?>