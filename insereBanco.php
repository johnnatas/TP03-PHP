<?php
    /**
     * Created by PhpStorm.
     * User: Leonardo
     * Date: 08/06/2017
     * Time: 04:12
     */

    //$aluno = new Aluno(isset($_POST["id"]), isset($_POST["nome"]), isset($_POST["email"]), isset($_POST["data"]), isset($_POST["comentario"]), isset($_POST["curso"]), isset($_POST["sexo"]));
    //echo $a->getNome();

if(isset($_GET['inserir'])){
    extract($_GET);
    require_once 'Classes/Aluno.php';
    $a = new Aluno($_GET['id'],
        $_GET['nome'],
        $_GET['email'],
        $_GET['data'],
        $_GET['comentario'],
        $_GET['curso'],
        $_GET['sexo']);

}

    //$aluno->create();
    //echo $a->getNome();
    echo $a->getCurso();

?>