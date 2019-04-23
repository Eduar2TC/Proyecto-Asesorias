<script src="<?php echo $path_js; ?>materialize.min.js"></script>
<script src="<?php echo $path_js; ?>jquery-3.3.1.min.js"></script>
<script src="<?php echo $path_js; ?>validin.min.js"></script>
<script src="http://www.google.com/recaptcha/api.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8.8.5/dist/sweetalert2.all.min.js" integrity="sha256-m7hW8Yyirje5pHkEHOZDzM2r8gscxT0nxPDY7rtJwGE=" crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        /*Corrige el error de sidenav*/
        var elem = document.querySelector('.sidenav');
        var instance = new M.Sidenav(elem);
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems);
        //evita dezplazarse al inicio cada que se da click sobre el collapsible
        $(".collapsible-header").click(function(e) {
            e.preventDefault();
        });

        var elems1 = document.querySelectorAll('.materialboxed');
        var instances = M.Materialbox.init(elems1);

    });
    $('document').ready(function() {
        /*  Aqui inicializar los elemetos jquery u funciones cuando la página esté cargada*/

        /*Evita enviar datos de acceso al presionar enter */
        $(window).keydown(function(event) {
            if (event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });

        //Cambia el tmaño dinamicamente del sidenav al tamaño visible del contenido principal al hacer Scroll
        $(window).on('scroll', function() {
            var $el = $('#main-proyects'),
                scrollTop = $(this).scrollTop(),
                scrollBot = scrollTop + $(this).height(),
                elTop = $el.offset().top,
                elBottom = elTop + $el.outerHeight(),
                visibleTop = elTop < scrollTop ? scrollTop : elTop,
                visibleBottom = elBottom > scrollBot ? scrollBot : elBottom;
            //Envia el tamaño obtenido al sidenav
            $('#sidenav-1').stop().animate({
                height: visibleBottom - visibleTop
            }, 200);
            /*Evita enviar datos de acceso al presionar enter */
            $(window).keydown(function(event) {
                if (event.keyCode == 13) {
                    console.log("caca");
                    event.preventDefault();
                    return false;
                }
            });
        });

        //evento : ya tengo cuenta :v
        $("#ya-tengo-cuenta").click(function() {
            $("#usuario").focus();
        });

        //validacion del formulario
        $('form').validin({
            validation_tests: {
                'alpha': {
                    'regex': /[a-zA-Z]*/,
                    'error_message': "This can only contain only letters"
                },
                'alpha_num': {
                    'regex': /[A-Z0-9]*/i,
                    'error_message': "This can only contain letters and numbers"
                },
                'alpha_space': {
                    'regex': /[A-Z ]*/i,
                    'error_message': "This can only contain letters"
                },
                'alpha_dash': {
                    'regex': /[A-Z\.\-_]*/i,
                    'error_message': "This can only contain letters, underscores and hyphens"
                },
                'alpha_num_dash': {
                    'regex': /[A-Z0-9\.\-_]*/i,
                    'error_message': "This can only contain letters, numbers, underscores and hyphens"
                },
                'number': {
                    'regex': /[\d]*/,
                    'error_message': "This needs to be a valid whole number"
                },
                'decimal': {
                    'regex': /(\d*\.?\d*)/,
                    'error_message': "This needs to be a valid number"
                },
                'name': {
                    'regex': /[A-Z\.\-'\s]*/i,
                    'error_message': "Ingresa un nombre válido"
                },
                'email': {
                    'regex': /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/i,
                    'error_message': "Ingresa un email válido"
                },
                'url': {
                    'regex': /(https?|ftp):\/\/[^\s\/$.?#].[^\s]*/i,
                    'error_message': "This needs to be a valid URL"
                },
                'phone': {
                    'regex': /(?=.*?\d{3}( |-|.)?\d{4})((?:\+?(?:1)(?:\1|\s*?))?(?:(?:\d{3}\s*?)|(?:\((?:\d{3})\)\s*?))\1?(?:\d{3})\1?(?:\d{4})(?:\s*?(?:#|(?:ext\.?))(?:\d{1,5}))?)\b/i,
                    'error_message': "Ingresa un telefono válido"
                },
                'zip': {
                    'regex': /\d{5}(?:-?\d{4})?/i,
                    'error_message': "This needs to be a valid zip code"
                },
                'creditcard': {
                    'regex': /(?:4[0-9]{12}(?:[0-9]{3})?|5[1-5][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})/i,
                    'error_message': "This needs to be a valid credit card number"
                },
                'regex': {
                    'regex': /.*/i,
                    'error_message': "This is not a valid value"
                },
                'min': {
                    'regex': /.*/i,
                    'error_message': "This number needs to be at least %i"
                },
                'max': {
                    'regex': /.*/i,
                    'error_message': "This number needs to no more than %i"
                },
                'min_length': {
                    'regex': /.*/i,
                    'error_message': "This needs to be at least %i characters long"
                },
                'max_length': {
                    'regex': /.*/i,
                    'error_message': "This needs to be no more than %i characters long"
                },
                'match': {
                    'regex': /.*/i,
                    'error_message': "Las contraseñas no coinciden"
                },
                'max-min-length': {
                    'regex': /^[a-zA-Z]{5,25}$/,
                    'error_message': "ingresa un nombre mayor a 5 y menor a 25 caracteres"

                },
                'matricula': {
                    'regex': /^\d{9,9}$/,
                    'error_message': "Ingresa una matricula valida!"
                },
                'contrasenia': {
                    'regex': /^.*(?=.{4,30})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).*$/,
                    'error_message': "La contraseña debe tener al menos 4 caracteres de longitud, 1 mayúscula, 1 minúscula y 1 número"
                }
            },
            // delay time in milliseconds
            feedback_delay: 700,
            // default CSS classes
            invalid_input_class: 'invalid',
            error_message_class: "validation_error",

            // default error messages
            form_error_message: "Please fix any errors in the form",
            required_fields_initial_error_message: "Por favor llena todos los campos requeridos",
            required_field_error_message: "Este campo es requerido",

            // adjust margins on the validation error messages
            override_input_margins: true,

            onValidateInput: function(validation_info) {
                var tagError = validation_info.input;
                var tagErrorToString = tagError.outerHTML;

                var mensajeError = validation_info.error_message;
                if (mensajeError.length > 0) {
                    if (tagErrorToString.indexOf('email') !== -1) {
                        M.toast({
                            html: 'Error : ' + mensajeError,
                            inDuration: 300,
                            classes: 'rounded'
                        });
                    } else if (tagErrorToString.indexOf('password') !== -1) {
                        M.toast({
                            html: 'Error : ' + mensajeError,
                            inDuration: 300,
                            classes: 'rounded'
                        });
                    }
                }
            }
        });

        //send ajax
        $('#formulario-registro').submit(function(e) {
            var formulario = $('#formulario-registro');
            e.preventDefault(); // avoid to execute the actual submit of the form.
            // Call ajax for pass data to other place
            $.ajax({
                type: formulario.attr('method'),
                url: formulario.attr('action'),
                data: formulario.serialize(), // getting filed value in serialize form
                success: function(data) {
                    if (data) {
                        var respuesta = $.trim(data); //importante (quitas los espacios de la cadena)
                        if (respuesta === "Datos del nuevo usuario agregado exitosamente") {
                            Swal.fire(
                                respuesta,
                                'Aceptar',
                                'success'
                            ).then(function() {
                                window.location.href = "../index.php";
                            });
                        } else {
                            Swal.fire({
                                type: 'error',
                                title: 'Oops...',
                                text: 'Algo ha pasado: ' + respuesta,
                                footer: '<a href>¿Alguna sugerencia?</a>'
                            });
                        }
                    }
                },
                error: function(data) {
                    alert(data);
                    console.log(data);
                    alert("Posting failed.");
                }
            });
            // to prevent refreshing the whole page page
            return false;
        });

    });
    //habilities button submit "Necesary outside after load principal page"
    function recaptchaCallback() {
        $('#submitButton').removeAttr('disabled');
    };
    document.addEventListener('DOMContentLoaded', function() {
        //Puspin elements on aside and navbar
        var elems = document.querySelectorAll('.pushpin');
        var instances = M.Pushpin.init(elems, {
            top: 210,
            bottom: 10000, // --Final
            offset: 0
        });
        //Scrollspy del menu lateral
        var scrollspy = document.querySelectorAll('.scrollspy');
        var instances = M.ScrollSpy.init(scrollspy);
        //Inicializa el selector del formulario de registro de proyectos
        var select = document.querySelectorAll('select');
        var instances1 = M.FormSelect.init(select);
        /*Preloader animacion */
        $('.preloader-background').delay(1100).fadeOut('slow');

        $('.preloader-wrapper')
            .delay(1100)
            .fadeOut();
    });
    /*Back to top */
    if ($('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').removeClass('scale-out');
                } else {
                    $('#back-to-top').addClass('scale-out');
                }
            };
        backToTop();
        $(window).on('scroll', function() {
            backToTop();
        });

        $('#back-to-top').on('click', function(e) {
            e.preventDefault();
            $('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
</script>

</html>