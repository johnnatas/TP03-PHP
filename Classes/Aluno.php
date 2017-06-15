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

    /*public function __construct($id){
        $this->setId($id);
    }

    public function searchAluno($idP){
        $c = mysqli_connect("localhost", "root", "", "db_tp03");
        if(!$c){
            return "Erro ao estabelecer conexão com o banco";
        } else{
            if($ps = mysql_prepare($c, "SELECT NOME, EMAIL, DATA, COMENTARIO, CURSO, SEXO FROM  tb_aluno WHERE ID =".$idP or die(mysqli_error($c))){
                mysqli_stmt_execute($ps);
                mysqli_stmt_bind_result($ps, $this->nome, $this->email, $this->nascimento, $this->comentario, $this->curso, $this->sexo);
                
                mysqli_stmt_fetch($ps)
                $aluno = mysqli_stmt_fetch($ps);

                $this->setNome($aluno["nome"]);
                $this->setEmail($aluno["email"]);
                $this->setNascimento($aluno["data"]);
                $this->setComentario($aluno["comentario"]);
                $this->setCurso($aluno["curso"]);
                $this->setSexo($aluno["sexo"]);    

                


            }
        }
        mysqli_close($c);
    }*/

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

            if($ps = mysqli_prepare($c, "INSERT INTO tb_aluno VALUES(?,?,?,?,?,?,?)") or die(mysqli_error($c))){
                $ps->bind_param("issssss", $id, $nome, $email, $data, $comentario, $curso, $sexo);
                $ps->execute();
            }else{
                echo '<script> alert("Não cadastrou"); </script>';
            }
        }
        mysqli_close($c);
        //header('Location: index.php');
    }

    public static function delete($idP){
        $c = mysqli_connect("localhost", "root", "", "db_tp03");
        if(!$c){
            return "Erro ao estabelecer conexão com o banco";
        } else {
            $ps = mysqli_prepare($c, "DELETE FROM tb_aluno WHERE ID = ?") or die(mysqli_error($c));
            mysqli_stmt_bind_param($ps, "i", $idP);
            mysqli_stmt_execute($ps);
        }
        mysqli_close($c);
    }

    public static function update($idP, $nmP, $emP, $nsP, $cmP, $csP, $sxP){
        $c = mysqli_connect("localhost", "root", "", "db_tp03");
        if(!$c){
            return "Erro ao estabelecer conexão com o banco";
        } else {
            $ps = mysqli_prepare($c, "UPDATE tb_aluno SET NOME=?, EMAIL=?, DATA=?, COMENTARIO=?, CURSO=?, SEXO=?  WHERE ID = ?") or die(mysqli_error($c));
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
        $this->curso = $curso;
    }

    public function getSexo(){
        return $this->sexo;
    }

    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

    public function getAluno(){
        $aluno = "";
        $aluno .= "Nome: ".$this->getNome();
        $aluno .= "<br>Email: ".$this->getEmail();
        $aluno .= "<br>Data: ".$this->getNascimento();
        $aluno .= "<br>Comentário: ".$this->getComentario();
        $aluno .= "<br>Curso: ".$this->getCurso();
        $aluno .= "<br>Sexo: ".$this->getSexo();
        return $aluno;
    }
}