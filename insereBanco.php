<?php
    /**
     * Created by PhpStorm.
     * User: Leonardo
     * Date: 08/06/2017
     * Time: 04:12
     */
    include 'Classes/Aluno.php';
    $aluno = new Aluno(isset($_POST["id"]), isset($_POST["nome"]), isset($_POST["email"]), isset($_POST["data"]), isset($_POST["comentario"]), isset($_POST["curso"]), isset($_POST["sexo"]));
    echo $aluno->getNome();
    echo $_POST["id"];
    $aluno->create();
    echo $aluno->getNome();
?>