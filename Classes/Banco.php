<?php

/**
 * Created by PhpStorm.
 * User: jonatas
 * Date: 30/05/17
 * Time: 19:35
 */
class Banco {

    function conectarBanco(){
        return mysqli_connect("localhost", "root", "", "db_tp03");
    }

    function listar(){
        $con = $this->conectarBanco();

        if(!$con){
            echo "Erro ao conectar com banco de dados: " . PHP_EOL;
        }
        else{
            $dados = array();
            $prepareStatement = mysqli_prepare($con, "SELECT ID, NOME, EMAIL, DATA, COMENTARIO, CURSO, SEXO  FROM tb_aluno");
            mysqli_stmt_bind_param($prepareStatement, "issssss", $id, $nome, $email, $data, $comentario, $curso, $sexo);
            mysqli_stmt_execute($prepareStatement);
            mysqli_stmt_bind_result();
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

        <?php
            while($ln = $cmd->fetch_array()){
                //listando os dados
        ?>
                        <tr>
                            <td><?php echo $ln['id'] ?></td>
                            <td><?php echo $ln['nome'] ?></td>
                            <td><?php echo $ln['email'] ?></td>
                            <td><?php echo $ln['data'] ?></td>
                            <td><?php echo $ln['comentario'] ?></td>
                            <td><?php echo $ln['curso'] ?></td>
                            <td><?php echo $ln['sexo'] ?></td>
                        </tr>
        <?php } ?>

                </table>
            </div>

<?php
            mysqli_close($con);
        }
    }

    function inserir($id, $nm, $em, $dt,$cm, $cs, $sx ){

        $con = $this->conectarBanco();

        if(!$con){
            echo "Erro ao conectar com banco de dados: " . PHP_EOL;
        }
        else{
            $prepareStatement = mysqli_prepare($con, "INSERT INTO tb_aluno VALUES (?,?,?,?,?,?,?");
            mysqli_stmt_bind_param($prepareStatement, "issssss", $id, $nome, $email, $data,$comentario, $curso, $sexo);
            $id = $_POST["id"];
            $nm = $_POST["nome"];
            $em = $_POST["email"];
            $dt = $_POST["data"];
            $cm = $_POST["comentario"];
            $cs = $_POST["curso"];
            $sx = $_POST["sexo"];

            mysqli_stmt_execute($prepareStatement);
        }
        mysqli_close($con);

    }


}
?>