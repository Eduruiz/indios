<?php include 'inc/head.php'; ?>
    <body class="home">
        
        <?php include 'inc/chromeframe.php' ?>

        <!-- Main Content -->
        <?php include 'inc/header.php' ?>
        <div class="slider-container">
            <div class="container">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <img src="images/slider/1.jpg" />        
                            </li>
                            <li>
                                <img src="images/slider/1.jpg" />        
                            </li>
                            <li>
                                <img src="images/slider/1.jpg" />        
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <section class="seven columns agenda">
                    <h2>Agenda</h2>
                    <a href="agenda">25/04 - Festival Abril pro Rock - Olinda - PE</a>
                    <div class="bar-ornament"></div>
                    <a href="agenda">25/04 - Festival Abril pro Rock - Olinda - PE</a>
                    <div class="bar-ornament"></div>
                    <a href="agenda">25/04 - Festival Abril pro Rock - Olinda - PE</a>
                    <div class="bar-ornament"></div>
                    <a href="agenda">25/04 - Festival Abril pro Rock - Olinda - PE</a>
                    <div class="bar-ornament"></div>
                </section>
                <section class="nine columns soundcloud">
                    <h2 class="inverse">
                        Para Ouvir
                    </h2>
                    <iframe scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/22869900&amp;color=ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_artwork=true"></iframe>
                </section>
            </div>
        </div>
        
        <div class="divider"></div>
        
        <div class="bg-grey">
            <div class="container">
                <section class="seven columns">
                    <h2>Entre para a tribo</h2>
                    <div id="fb-root"></div>
                    <div class="fb-like-box" data-href="https://www.facebook.com/indiosnativosvalvulados" data-width="100%" data-height="350" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
                </section>
                <section class="nine columns video">
                    <h2 class="inverse">Vídeos da Tribo</h2>
                    <iframe src="//www.youtube.com/embed/fZ50X8oi-kg" frameborder="0" allowfullscreen></iframe>
                </section>
            </div>
        </div>

        <?php include 'inc/footer.php' ?>

        <?php include 'inc/scripts.php' ?>
        
        <script>
          $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: false,
                prevText: "",
                nextText: "",
                useCSS: false,
            });
          });
        </script>
    </body>
</html>
