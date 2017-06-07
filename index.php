<<<<<<< HEAD
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
        <title>Index</title>
    </head>
    <body>
    <div class="container">
        <!--MENU-->
        <nav class="navbar navbar-inverse navbar-toggleable-md bg-inverse">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">Fatec PG</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-md-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Página Inicial<span class="sr-only">(Current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="form.php">Formulário</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">#</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--FIM-MENU-->
        <div class="container">
            <h1 class="text-center">Trabalho Prático de Linguagem de Programação IV</h1>


        </div>

    <script src="assets/js/bootstrap.min.js"></script>
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