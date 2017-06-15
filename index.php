<?php include 'assets/includes/header.php' ?>
        <!-- cabeçalho -->
        <?php include 'assets/includes/menu.php' ?>

        <!-- página -->
            <div class="container">

                <h1 class="text-center">Trabalho Prático de Linguagem de Programação IV</h1>

                <h2 class="text-center">Lista de todos os cadastrados no sistema:</h2>

                <div class="row">
                    <input type="text" class="form-control" onkeyup="busca(this.value)" placeholder="Consulte aqui..." /><br>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>

                <br>
                <br>
                <br>
                <div id="exibe-dados">
                    <?php
                        include_once "conexaoBanco.php";
                        include_once "select.php";
                    ?>
                </div>
            </div>

        <!-- rodapé -->
        <?php include 'assets/includes/footer.php' ?>

        <!-- scripts -->
        <?php include 'assets/includes/scripts.php' ?>

    </body>
</html>
<script type="text/javascript" src="assets/js/script.js"></script>