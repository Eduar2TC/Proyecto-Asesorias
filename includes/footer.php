<script src="js/materialize.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {

        /*Corrige el error de sidenav*/
        var elem = document.querySelector('.sidenav');
        var instance = new M.Sidenav(elem);
        var elems = document.querySelectorAll('.collapsible');
        var instances = M.Collapsible.init(elems);

    });
    $("document").ready(function() {

        /*   $('.sidenav').sidenav();
           $('#sidenav-1').sidenav({ edge: 'left' });


           //init collapsible
           $('.collapsible').collapsible();*/



    });
    //Puspin elements on aside and navbar
    document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.pushpin');
        var instances = M.Pushpin.init(elems, {
            top: 285,
            bottom: 10000, // --Final
            offset: 0
        });


        $.mobile.panel.prototype._positionPanel = function() {
            var self = this,
                panelInnerHeight = self._panelInner.outerHeight(),
                expand = panelInnerHeight > $.mobile.getScreenHeight();

            if (expand || !self.options.positionFixed) {
                if (expand) {
                    self._unfixPanel();
                    $.mobile.resetActivePageHeight(panelInnerHeight);
                }
                //window.scrollTo( 0, $.mobile.defaultHomeScroll );
            } else {
                self._fixPanel();
            }
        };
    });
</script>

</html> 