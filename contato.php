<?php include 'inc/head.php' ?>
    <body class="contato">
        
        <?php include 'inc/chromeframe.php' ?>

        <!-- Main Content -->
        <?php include 'inc/header.php' ?>
       
       <div class="container">
           <h1>Contato</h1>
       </div>

        <div class="divider top"></div>
        
        <div class="container content">
            <div class="eight columns">
                <h3>Fale com os índios</h3>
                <form action="contat/send">
                    <input type="text" id="nome" name="nome" placeholder="nome">
                    <input type="email" id="email" name="email" placeholder="email">
                    <textarea id="msg" name="msg" placeholder="mensagem"></textarea>
                    <input type="submit" value="enviar" class="arrow-button">
                </form>
            </div>
            <div class="six columns">
                <h3>Shows</h3>
                <address>
                    End – Rua Iperoig – no 355 – Perdizes<br>
                    São Paulo – SP<br>
                    (11) 36751876<br>
                    <br>
                    CEP -05016-000<br>
                    <br>
                    veronica@pessoaprodutora.com.br<br>
                    anapaula@pessoaprodutora.com.br
                </address>
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
