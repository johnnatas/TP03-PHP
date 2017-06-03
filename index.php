<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
        <title>Home</title>
    </head>
    <body>
        <!-- cabeçalho -->
        <?php include 'menu.php' ?>

        <!-- página -->
            <div class="container">

                <h1 class="text-center">Trabalho Prático de Linguagem de Programação IV</h1>

                <div id="logo">
                    <img src="assets/img/logo-fatec.png" alt="logo-fatec" class="img-responsive">
                </div>

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
        <?php include 'footer.php' ?>

        <!-- scripts -->
        <script src="assets/js/jquery.js" type="text/javascript"></script>
        <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    </body>
</html>