<?php
    /**
     * Created by PhpStorm.
     * User: Leonardo
     * Date: 08/06/2017
     * Time: 07:18
     */
    $id = $_POST["id"];
    $nm = $_POST["nome"];
    $em = $_POST["email"];
    $dt = $_POST["data"];
    $cm = $_POST["comentario"];
    $cs = $_POST["curso"];
    $sx = $_POST["sexo"];
    $prepareStatement = mysqli_prepare($con, "UPDATE tb_aluno SET NOME=?, EMAIL=?, DATA=?, COMENTARIO=?, CURSO=?, SEXO=? WHERE ID=?");
    mysqli_stmt_bind_param($prepareStatement, "ssssssi", $nm, $em, $dt, $cm, $cs, $sx, $id);
    mysqli_stmt_execute($prepareStatement);

    include 'assets/includes/header.php';
    include 'assets/includes/menu.php'
?>
    <div class="container">

        <h1 class="text-center">Trabalho Prático de Linguagem de Programação IV</h1>

        <h2 class="text-center">Aluno atualizado</h2>

        <br>
        <br>
        <br>

        <?php
        include_once("conexaoBanco.php");
        include_once("select.php");
        ?>

    </div>

    <!-- rodapé -->
    <?php include 'assets/includes/footer.php' ?>

    <!-- scripts -->
    <?php include 'assets/includes/scripts.php' ?>

    </body>
    </html>

