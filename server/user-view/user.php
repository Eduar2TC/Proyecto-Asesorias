<?php
//title
$tituloPagina = "Asesorias - Principal";
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
                <div class="row no-margin">
                    <div class="col s12 right-align">
                        <h5 class="no-margin">Bienvenido: <span class="usuario-name"><?php echo $_SESSION['user']; ?></span></h5>
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
                                <li><a href="../../index.php" class="fuente-menu">Inicio</a></li>
                                <li><a href="../../proyectos.php" class="fuente-menu">Mis Proyectos</a></li>
                                <li><a href="#" class="blue-text waves-effect waves-red grey darken-4 btn"><span id="boton-registro">Salir</span></a>
                                </li>
                                <li><a href="../../ayuda.php" class="fuente-menu">Ayuda</a></li>
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
                <li><a href="../../index.php" class="blue-text">Inicio</a></li>
                <li><a href="#" class="blue-text">Proyectos</a></li>
                <li><a href="#" class="blue-text waves-effect waves-red grey darken-4 btn"><span>Salir</span></a>
                <li><a href="../../ayuda.php" class="blue-text">Ayuda</a></li>
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
                            <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
                            <li><a href="#!">Second Link</a></li>
                            <li>
                                <div class="divider"></div>
                            </li>
                            <li><a class="subheader">Subheader</a></li>
                            <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
                        </ul>
                        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    </div>
                </div>
            </aside>
        </section>
        <!--Seccion del Contenido Principal-->
        <section class="col m9 s12">
            <section>
                <!--Users and Proyects rank section-->
                <main id="main-user">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, voluptatum. Necessitatibus molestiae obcaecati, hic eaque deleniti quisquam alias natus cupiditate veniam provident, sint, reprehenderit minus! Placeat facilis voluptatum esse optio.
                    Saepe, odit totam eveniet laboriosam quasi enim nulla amet id ducimus. Nostrum tempore laudantium ipsa quo reiciendis animi corrupti nam sequi facilis repellat cupiditate consequuntur, commodi doloremque blanditiis perferendis aut.
                    Nam at velit expedita, suscipit, facere veniam tempora blanditiis amet fugit ex culpa a minus, totam enim! Sequi dolorum numquam voluptatem quibusdam commodi obcaecati, sunt facere? Delectus nulla rem possimus.
                    Non ab expedita dignissimos? Magnam maxime quaerat nemo nihil voluptate laudantium, blanditiis ex, eum tempore fugiat ut quidem quae nobis saepe. Eius quam, tempora assumenda minima minus cupiditate nisi ab.
                    Distinctio nobis, cumque odit saepe mollitia, sint totam maxime at inventore dolorum recusandae. Animi sunt quae ea, ipsa veniam voluptatum aspernatur natus iure similique, aliquid iste doloremque molestiae blanditiis officia.
                    Provident modi quos ea voluptatibus aspernatur eius illum alias delectus rem, doloribus, molestias dignissimos consequuntur hic tenetur beatae nostrum perspiciatis quas voluptatem deserunt ab eaque a similique. Reprehenderit, non tempore?
                    Iste, recusandae quae. Fugit, beatae aperiam. Dicta, quod sequi soluta explicabo totam est repellendus officiis nemo nostrum dignissimos nam voluptas in numquam illum fugiat cum modi amet aliquid facere quae.
                    Dolorem sunt voluptatum aperiam odio modi, quo doloremque! Repudiandae dolorem illum libero assumenda quaerat, vero sapiente modi vitae reiciendis dignissimos recusandae illo ipsum voluptatum excepturi. Cumque deserunt ipsa beatae nemo.
                    Optio, veniam quasi. Id pariatur provident vero voluptatem numquam, unde iste saepe, recusandae aspernatur commodi quod voluptates, iusto asperiores. Maxime sit nemo deserunt iste nisi ullam quos saepe, doloremque dolore.
                    Explicabo architecto culpa eos obcaecati ullam iusto assumenda neque magnam minus quibusdam vel aliquam quidem, modi iure pariatur itaque natus excepturi dignissimos eius! Quam tempora nulla architecto libero reprehenderit sunt.
                    Voluptates distinctio ratione nobis at quos dolor molestiae beatae labore velit eius ab alias, doloremque nisi autem. Praesentium illo sint dignissimos rem ipsum distinctio temporibus impedit ipsam, non quaerat vero!
                    Ipsum dolore accusantium culpa sapiente, amet hic est. A iusto sapiente soluta? Sunt enim libero qui, velit, odio sint, sed tempore maxime id provident molestiae impedit explicabo? Voluptas, facere blanditiis!
                    Eaque accusamus doloribus molestiae blanditiis repudiandae iure quos quisquam quis soluta consequatur. Neque, dicta odit. Voluptate, velit. Deserunt voluptatibus nulla vero quo, magnam, aut accusamus quasi sequi, quae itaque ab.
                    Quam dicta ullam sapiente eveniet atque, pariatur, a mollitia voluptatem repudiandae quas animi molestias autem ducimus consequuntur facilis officiis id impedit eius perferendis velit nesciunt quod fugiat. Corrupti, est non.
                    Ab labore impedit suscipit laboriosam deserunt quisquam quasi, incidunt earum dolore ipsa, mollitia rem quod corporis veritatis magni dolorum dolorem facilis voluptatem? Harum atque quos, blanditiis dolor cupiditate odio. Explicabo.
                    Placeat amet quasi veniam pariatur exercitationem architecto, odio sequi minus quas quo libero a culpa, ducimus aliquid commodi in delectus ex error doloribus ipsa? Sed qui quod natus. Enim, facilis.
                    Eveniet odio aspernatur doloremque et pariatur accusamus quod vel, harum itaque repudiandae consequuntur voluptates tenetur cupiditate asperiores accusantium sunt minus dolor? Dolorem cumque maxime eos optio, itaque nostrum rem facilis!
                    Aliquid earum quaerat adipisci veritatis, sapiente rerum quos nam repellendus totam consequuntur necessitatibus explicabo atque nemo nesciunt id! Harum ab necessitatibus explicabo perferendis pariatur expedita quas quasi eos voluptate libero.
                    Iure excepturi quis eaque nobis accusantium quibusdam! Obcaecati eius doloremque magni temporibus quasi asperiores modi repudiandae et odit? Provident, eligendi deleniti! Ab aliquam temporibus nostrum repellat voluptatibus nobis eum deleniti?
                    Dolores excepturi repellendus fugiat, vel voluptas, dolore perspiciatis, iste beatae laborum unde repudiandae voluptatibus alias laudantium delectus animi corrupti ipsa. Explicabo maiores, necessitatibus omnis libero atque quibusdam vitae. Impedit, cupiditate?
                    Quibusdam a ipsum tempore nihil officia sunt impedit rerum sequi sint corrupti, minus natus iure, quo delectus in quia odio. Dignissimos quibusdam minima cumque voluptatibus numquam vel, est sed reprehenderit!
                    Et officia, culpa odit vitae numquam quas sequi incidunt quis ut doloremque vero id, ducimus labore officiis corrupti sint dolor nam tenetur dolores corporis pariatur harum natus! Temporibus, fugiat eligendi.
                    Necessitatibus deleniti itaque beatae, molestias cum fugiat similique, praesentium dolore, animi unde ipsa laudantium accusamus? Numquam repudiandae perferendis at voluptatibus tempora dolore ex. Perferendis tempora ut iure, quo delectus non?
                    Dignissimos nihil ipsa doloribus molestias vero? Vitae nemo unde minus perspiciatis libero vero ad cumque beatae dolorum esse facere enim quo saepe neque voluptatem aut tenetur, similique fugiat ea eaque.
                    Tempore error dolore sequi eaque. Temporibus optio vitae, ex ut repudiandae rerum molestiae mollitia perferendis magni enim! Deleniti facere omnis corrupti quod debitis, cum, praesentium officia atque magnam consectetur reprehenderit.
                    Enim, dignissimos maiores autem veritatis ipsa asperiores velit nihil cum doloremque error sint odit in facere voluptate esse. Sunt qui corporis odit eum incidunt tempore illum ipsum temporibus perferendis numquam!
                    Voluptatem molestias ad tempora debitis sapiente veniam vero, est, aliquam ratione et deleniti nostrum. Aperiam, laboriosam consectetur odit vitae corrupti, ipsam ratione ipsa inventore nulla error nemo quas dolor deleniti.
                    Ad molestiae corporis excepturi, nemo maxime repellat delectus tempore, incidunt recusandae ipsa soluta dicta, iusto laboriosam ab voluptates quo modi fugiat beatae quidem. Amet corporis sapiente ipsa illum esse rem?
                    Sed non excepturi illo facilis. Ratione ipsam ipsa, laborum dolore nisi magni, porro voluptate exercitationem aperiam quis culpa quaerat sunt fugit ducimus expedita distinctio dolor atque aliquid cumque reprehenderit minima.
                    Maiores dolorem optio, vitae eaque accusantium fugit ex autem illo sapiente perspiciatis molestias ratione deserunt, quas veritatis et fugiat eligendi praesentium? Ipsam, quas? Cupiditate consequuntur nam quod qui similique laborum.

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