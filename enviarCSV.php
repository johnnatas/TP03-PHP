<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 07/06/2017
 * Time: 13:30
 */

require_once 'Classes/Aluno.php';


$status = move_uploaded_file($_FILES["aluno-csv"]["tmp_name"], "files/" . time() . "-" . $_FILES["aluno-csv"]["name"]);
if ($status) {
    $f = fopen("files/" . time() . "-" . $_FILES["aluno-csv"]["name"], "r");
    if ($f) {
        $title_row = fgetcsv($f, 100, ";");
        $rows = fgetcsv($f, 100, ";");
        while ($rows !== null) {
            $aluno = new Aluno($rows[1], $rows[2], $rows[3], $rows[4], $rows[5], $rows[6], $rows[7]);
            $aluno->create();
            $rows = fgetcsv($f, 100, ";");
        }
        fclose($f);
    }
}
header("location.index.php");
?>

