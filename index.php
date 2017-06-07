<?php include 'assets/includes/header.php' ?>
        <!-- cabeçalho -->
        <?php include 'assets/includes/menu.php' ?>

        <!-- página -->
            <div class="container">

                <h1 class="text-center">Trabalho Prático de Linguagem de Programação IV</h1>

                <h2 class="text-center">Lista de todos os cadastrados no sistema:</h2>

                <div class="row">
                    <input type="text" class="form-control" /><br>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>

                <br>
                <br>
                <br>

                <?php
                    include_once 'Classes/Banco.php';
                    $banco = new Banco();
                    $banco->listar();
                ?>

            </div>

        <!-- rodapé -->
        <?php include 'assets/includes/footer.php' ?>

        <!-- scripts -->
        <?php include 'assets/includes/scripts.php' ?>

    </body>
</html>