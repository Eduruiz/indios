<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/flexslider.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">Você está usando um navegador <strong>antigo!</strong>. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a> para melhor experiência com o site.</p>
        <![endif]-->

        <!-- Main Content -->
        <header>
            <div class="sixteen columns">
                <a href="home" class="ir logo">
                    <h1>Índios Nativos Valvulados</h1>
                </a>
                
                <nav class="menu">
                    <ul>
                        <li><a href="home" class="active">Início</a></li>
                        <li><a href="">Para Ouvir</a></li>
                        <li><a href="lifestyle">Lifestyle</a></li>
                        <li><a href="sobre_nos">Sobre Nós</a></li>
                        <li><a href="contato">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </header>
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
        
        <div class="container">
            <div class="row">
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

        <footer>
            <div class="container">
                <div class="nine columns">
                    <span>Índios Nativos Valvulados &copy; <br class="baby"> todos os direitos reservados</span>
                </div>
                <div class="seven columns midias">
                    <ul>
                        <li>nossas mídias</li> 
                        <li><a href="http://instagram.com/indiosnativosvalvulados"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="http://www.flickr.com/photos/arteinv"><i class="fa fa-flickr"></i></a></li>
                        <li><a href="https://www.youtube.com/user/ArteINV"><i class="fa fa-youtube-square"></i></a></li>
                        <li><a href="https://www.facebook.com/indiosnativosvalvulados"><i class="fa fa-facebook-square"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>
        <div class="ornament"></div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        
        <script src="js/min/plugins-ck.js"></script>
        <script src="js/min/main-ck.js"></script>
        
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
