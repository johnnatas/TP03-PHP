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
        $this->id =  $id;
        $this->nome = $nm;
        $this->email = $em;
        $this->nascimento = $ns;
        $this->comentario = $cm;
        $this->curso = $cs;
        $this->sexo = $sx;
    }

    //OPERAÇÕES COM O BANCO
    public function create(){
        $c = mysqli_connect("localhost", "root", "", "db_tp03");
        if(!$c){
            return "Erro ao estabelecer conexão com o banco";
        } else{
           $id = $this->id;
           $nome = $this->nome;
           $email = $this->email;
           $data = $this->nascimento;
           $comentario = $this->comentario;
           $curso = $this->curso;
           $sexo = $this->sexo;

            if($ps = mysqli_prepare($c, "INSERT INTO tb_aluno VALUES(?,?,?,?,?,?,?)") or die(mysqli_error($c))){
                $ps->bind_param("issssss", $id, $nome, $email, $data, $comentario, $curso, $sexo);
                $ps->execute();
            }else{
                echo '<script> alert("Não cadastrou"); </script>';
            }
        }
        mysqli_close($c);
        header('Location: inserir.php');
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

}