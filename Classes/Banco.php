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
            $cmd = $con->query("SELECT * FROM tb_cadastrados");
            while($ln = $cmd->fetch_array()){
                //tabela listando os dados
?>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Data</th>
                            <th>Numérico</th>
                            <th>Texto validado por expressão regular</th>
                            <th>Texto de várias linhas</th>
                            <th>Dropdown list</th>
                            <th>Radio Button</th>
                        </tr>
                        <tr>
                            <td><?php echo $ln['nm_cadastrado'] ?></td>
                            <td><?php echo $ln['nm_email'] ?></td>
                            <td><?php echo $ln['dt_nascimento'] ?></td>
                            <td><?php echo $ln['numerico'] ?></td>
                            <td><?php echo $ln['ds_texto'] ?></td>
                            <td><?php echo $ln['ds_txtvariaslinhas'] ?></td>
                            <td><?php echo $ln['dropdown'] ?></td>
                            <td><?php echo $ln['rdb'] ?></td>
                        </tr>
                    </table>
                </div>

<?php
            }
            mysqli_close($con);
        }
    }

    function inserir($nome, $email, $data, $num,$validacao_texto, $texto_varias_linhas, $dropdwon, $rdb ){

        $con = mysqli_connect("localhost", "root", "", "db_tp03");
        $cmd = $con->query("INSERT INTO tb_cadastrados VALUES ($nome, $email, $data, $num, $validacao_texto, $texto_varias_linhas, $dropdwon, $rdb)");
        //a continuar...

    }

}
?>