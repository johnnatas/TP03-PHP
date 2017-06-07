<?php

/**
 * Created by PhpStorm.
 * User: jonatas
 * Date: 30/05/17
 * Time: 19:35
 */
class Banco
{
    function listar(){
        $con = mysqli_connect("localhost", "root", "", "db_tp03");

        if(!$con){
            echo "Erro ao conectar com banco de dados: " . PHP_EOL;
        }
        else{
            $cmd = $con->query("SELECT * FROM aluno");
            while($ln = $cmd->fetch_array()){
                //tabela listando os dados
?>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Data de Nascimento</th>
                            <th>Comentário</th>
                            <th>Curso</th>
                            <th>Sexo</th>
                        </tr>
                        <tr>
                            <td><?php echo $ln['id'] ?></td>
                            <td><?php echo $ln['nome'] ?></td>
                            <td><?php echo $ln['email'] ?></td>
                            <td><?php echo $ln['data'] ?></td>
                            <td><?php echo $ln['comentario'] ?></td>
                            <td><?php echo $ln['curso'] ?></td>
                            <td><?php echo $ln['sexo'] ?></td>
                        </tr>
                    </table>
                </div>

<?php
            }
            mysqli_close($con);
        }
    }

    function inserir($id, $nome, $email, $data,$comentario, $curso, $sexo ){

        $con = mysqli_connect("localhost", "root", "", "db_tp03");
        $cmd = $con->query("INSERT INTO tb_cadastrados VALUES ($id, $nome, $email, $data,$comentario, $curso, $sexo ");
        //a continuar...

    }

}
?>