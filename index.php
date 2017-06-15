<?php include 'assets/includes/header.php' ?>
        <!-- cabeçalho -->
        <?php include 'assets/includes/menu.php' ?>

        <!-- página -->
            <div class="container">

                <h1 class="text-center">Trabalho Prático de Linguagem de Programação IV</h1>

                <div class="row" id="procurar">
                    <input type="text" class="form-control col-md-5" onkeyup="busca(this.value)" placeholder="Consulte aqui..." /><br>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>

                <div id="exibe-dados">
                    <?php
                        include_once "conexaoBanco.php";
                        include_once "select.php";
                    ?>
                </div>
                <h2 class="text-center">Mapa</h2>
                <div class="col-md-12 offset-2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7382408817375!2d-46.4145246845655!3d-24.005018784011334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce1db2e586da8d%3A0x271ae3e10bdc671e!2sFATEC!5e0!3m2!1spt-BR!2sbr!4v1497569560683" width="700" height="450" frameborder="1"></iframe>
                </div>

            </div>

        <!-- rodapé -->
        <?php include 'assets/includes/footer.php' ?>

        <!-- scripts -->
        <?php include 'assets/includes/scripts.php' ?>

    </body>
</html>
<script type="text/javascript" src="assets/js/script.js"></script>