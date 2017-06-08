<?php

/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 08/06/2017
 * Time: 09:09
 */
class Aluno{
    private $id;
    private $nome;
    private $email;
    private $nascimento;
    private $comentario;
    private $curso;
    private $sexo;

    public function __construct($id, $nm, $em, $ns, $cm, $cs, $sx){
        $this->setId($id);
        $this->setNome($nm);
        $this->setEmail($em);
        $this->setNascimento($ns);
        $this->setComentario($cm);
        $this->setCurso($cs);
        $this->setSexo($sx);
    }

    //OPERAÇÕES COM O BANCO
    public function create(){
        $c = mysqli_connect("localhost", "root", "", "db_tp03");
        if(!$c){
            return "Erro ao estabelecer conexão com o banco";
        } else{
           $id = $this->getId();
           $nome = $this->getNome();
           $email = $this->getEmail();
           $data = $this->getNascimento();
           $comentario = $this->getComentario();
           $curso = $this->getCurso();
           $sexo = $this->getSexo();

            $ps = mysqli_prepare($c, "INSERT INTO tb_aluno VALUES(?,?,?,?,?,?,?)") or die(mysqli_error($c));
            mysqli_stmt_bind_param($ps, "issssss", $id, $nome, $email, $data, $comentario, $curso, $sexo);
            mysqli_stmt_execute($ps);
        }
        mysqli_close($c);
    }

    public function delete($idP){
        $c = mysqli_connect("localhost", "root", "", "db_tp03");
        if(!$c){
            return "Erro ao estabelecer conexão com o banco";
        } else {
            $ps = mysqli_prepare($c, "DELETE ID, NOME, EMAIL, DATA, COMENTARIO, CURSO, SEXO FROM tb_aluno WHERE ID = ".$idP) or die(mysqli_error($c));
            mysqli_stmt_bind_param($ps, "i", $idP);
            mysqli_stmt_execute($ps);
        }
        mysqli_close($c);
    }

    public function update($idP, $nmP, $emP, $nsP, $cmP, $csP, $sxP){
        $c = mysqli_connect("localhost", "root", "", "db_tp03");
        if(!$c){
            return "Erro ao estabelecer conexão com o banco";
        } else {
            $ps = mysqli_prepare($c, "UPDATE 'tb_aluno' SET NOME=?, EMAIL=?, DATA=?, COMENTARIO=?, CURSO=?, SEXO=? FROM 'tb_aluno' WHERE ID = ?") or die(mysqli_error($c));
            mysqli_stmt_bind_param($ps, "ssssssi", $nmP, $emP, $nsP, $cmP, $csP, $sxP, $idP);
            mysqli_stmt_execute($ps);
        }
        mysqli_close($c);
    }

    //GETTERS AND SETTERS
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getNascimento(){
        return $this->nascimento;
    }

    public function setNascimento($nascimento){
        $this->nascimento = $nascimento;
    }

    public function getComentario(){
        return $this->comentario;
    }

    public function setComentario($comentario){
        $this->comentario = $comentario;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function setCurso($curso){
        $this->nome = $curso;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }
}