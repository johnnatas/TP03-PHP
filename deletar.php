<?php
require_once 'Classes/Aluno.php';

Aluno::delete($_GET["id"]);
header("location: index.php");
?>
