<script src="js/materialize.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        /*Corrige el error de sidenav*/
        var elem = document.querySelector('.sidenav');
        var instance = new M.Sidenav(elem);
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems);
        $(".collapsible-header").click(function(e) {
            e.preventDefault();
        });


    });
    $('document').ready(function() {
        /*  Aqui inicializar los elemetos jquery u funciones cuando la página esté cargada*/

        //Cambia el tmaño dinamicamente del sidenav al tamaño visible del contenido principal al hacer Scroll
        $(window).on('scroll', function() {
            var $el = $('#main-index'),
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
        });


    });
    //Puspin elements on aside and navbar
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.pushpin');
        var instances = M.Pushpin.init(elems, {
            top: 210,
            bottom: 10000, // --Final
            offset: 0
        });
    });
</script>

</html>