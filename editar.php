<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 08/06/2017
 * Time: 06:32
 */
$con = getConnection();
$prepareStatement = mysqli_prepare($con, "SELECT ID, NOME, EMAIL, DATA, COMENTARIO, CURSO, SEXO WHERE ID = ?");
mysqli_stmt_bind_param($prepareStatement, "i", $id);
$id = $_GET["id"];
mysqli_stmt_execute($prepareStatement);
mysqli_stmt_bind_result($id, $nome, $email, $data, $comentario, $curso, $sexo);
mysqli_stmt_fetch($prepareStatement);

?>