<<<<<<< HEAD
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <title>Index</title>
    </head>
    <body>
=======
<?php include 'assets/includes/header.php' ?>
        <!-- cabeçalho -->
        <?php include 'assets/includes/menu.php' ?>

        <!-- página -->
            <div class="container">

                <h1 class="text-center">Trabalho Prático de Linguagem de Programação IV</h1>

                <h2 class="text-center">Lista de todos os cadastrados no sistema:</h2>

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

>>>>>>> aa22838c956d4d37bd05841bf477d2771a63715e
    </body>
</html>