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

echo "<div class='table-responsive'>";
echo "    <table class='table'>";
echo "        <tr>";
echo "            <th>ID</th>";
echo "                  <th>Nome</th>";
echo "                  <th>E-mail</th>";
echo "            <th>Data de Nascimento</th>";
echo "                  <th>Comentário</th>";
echo "            <th>Curso</th>";
echo "            <th>Sexo</th>";
echo "             </tr>";

while($linha != null) {
    echo "         <tr>";
    echo "             <td>" . $linha["ID"] . "</td>";
    echo "             <td>" . $linha["NOME"] . "</td>";
    echo "             <td>" . $linha["EMAIL"] . "</td>";
    echo "             <td>" . $linha["DATA"] . "</td>";
    echo "             <td>" . $linha["COMENTARIO"] . "</td>";
    echo "             <td>" . $linha["CURSO"] . "</td>";
    echo "             <td>" . $linha["SEXO"] . "</td>";
    echo "             <td><a href='editar.php?id={$linha['ID']}'><button>Editar</button></a>";
    echo "             <td><a href='excluir.php?id={$linha['ID']}'><button>Excluir</button></a>";
    echo "         </tr>";
    $linha = mysqli_fetch_assoc($tab);
}