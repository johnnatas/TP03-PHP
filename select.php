<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 08/06/2017
 * Time: 05:59
 */
$con = getConnection();
$SQL = "SELECT ID, NOME, EMAIL, DATA, COMENTARIO, CURSO, SEXO  FROM tb_aluno";
$tab = mysqli_query($con, $SQL);
$linha = mysqli_fetch_assoc($tab);
?>
<div class='table-responsive'>
    <table class='table'>
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
while($linha != null) {
    ?>
    <tr>
        <td><?=$linha["ID"]?></td>
        <td><?=$linha["NOME"]?></td>
        <td><?=$linha["EMAIL"]?></td>
        <td><?=$linha["DATA"]?></td>
        <td><?=$linha["COMENTARIO"]?></td>
        <td><?=$linha["CURSO"]?></td>
        <td><?=$linha["SEXO"]?></td>
        <td><a href='atualizar.php?id=<?=$linha['ID']?>'><button>Editar</button></a>
        <td><a href='deletar.php?id=<?=$linha['ID']?>'><button>Excluir</button></a>
    </tr>
    <?php $linha = mysqli_fetch_assoc($tab);
}
?>
    </table>
</div>
