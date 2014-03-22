<?php include 'inc/head.php' ?>
    <body class="sobre_nos">
        
        <?php include 'inc/chromeframe.php' ?>

        <!-- Main Content -->
        <?php include 'inc/header.php' ?>
       
       <div class="container">
           <h1>Sobre nós</h1>
       </div>

        <div class="divider top"></div>
        
        <div class="container">
            <div class="row">
                <div class="five columns">
                    <img src="images/isso-e-tudo-sobre-ela-capa.jpg"  class="img-responsive" alt="Quem Somos" />
                </div>
                <div class="eleven columns">
                    <blockquote>
                        Falar em mistura de estilos hoje em dia é quase chover no molhado. A regra, como todos nós sabemos, é misturar. Mas quando uma banda consegue fazer essa mistura com personalidade e segurança, não tocar no assunto chega a ser injusto. É o caso da banda Índios Nativos Valvulados. Formada em 2011, a banda paulista cujo estilo eu não me aventuro a definir já lançou um EP bastante convincente: “Isso É Tudo Sobre Ela”, de 2012.
                    </blockquote>
                </div>
            </div>
            <div class="row">
                <div class="sixteen columns">
                    <p>
                        O primeiro trabalho dos Índios passeia pelos mais diversos estilos, indo, como a própria banda gosta de enfatizar, “do jazz ao punk em segundos”, mas mais do que isso: Soa extremamente atual, seja buscando referências na década de 1970, 1950 ou 2010.
                        <br />
                        A personalidade do projeto fica por conta do contraste entre o vocal choroso de Daniel Barreto e o instrumental de gosto animado, mesmo em seus trechos mais melancólicos; e por um certo frescor digital do EP, tanto nos arranjos de influências mais modernas quanto nos trechos de samba e jazz.”
                        <br />
                        <span class="yellow">Marcus Lopes - <a href="http://www.keepitalive.com.br" class="yellow">keepitalive.com.br</a></span>
                    </p>
                </div>
            </div>

            <h3>índios nativos valvulados, é:</h3>
            
            <div class="row">
                <div class="member">
                    <figure>
                        <img src="images/members/barretinho.jpg" alt="Daniel Barreto">
                        <figcaption>
                            Daniel Barreto
                            <br />
                            <span class="what">Voz</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="member">
                    <figure>
                        <img src="images/members/cal.jpg" alt="Felipe Caltran">
                        <figcaption>
                            Felipe Caltran
                            <br />
                            <span class="what">Guitarra</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="member">
                    <figure>
                        <img src="images/members/gu.jpg" alt="Gustavo da Mata">
                        <figcaption>
                            Gustavo da Mata
                            <br />
                            <span class="what">Guitarra</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="member">
                    <figure>
                        <img src="images/members/re.jpg" alt="Renan Borges">
                        <figcaption>
                            Renan Borges
                            <br />
                            <span class="what">Bateria</span>
                        </figcaption>
                    </figure>
                </div>
                <div class="member">
                    <figure>
                        <img src="images/members/ti.jpg" alt="Tiago Borges">
                        <figcaption>
                            Tiago Borges
                            <br />
                            <span class="what">Baixo</span>
                        </figcaption>
                    </figure>
                </div>
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
