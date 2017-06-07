<?php
/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 07/06/2017
 * Time: 13:30
 */



//############################COPIEI E COLEI O CÓDIGO DO PROFESSOR PARA FAZER OS TESTES. DEPOIS ESTAREI MODIFICANDO.###########################//



$erro = array();
if ($_FILES) { // Se $_FILES diferente de vazio, equivale a true

    /*
       Preparação do comando SQL Insert para inserir os dados do arquivo na tabela Mysql.
       Referência: http://php.net/manual/pt_BR/mysqli.prepare.php
    */
    $c = mysqli_connect("localhost","root","","db_tp03"); // Conexão
    $ps=mysqli_prepare($c,"insert into aluno values(?,?,?)"); // Preparação
    // Liga variáveis aos parâmetros do Insert (ou seja, as ?)
    mysqli_stmt_bind_param($ps,"iss",$ID,$MN,$ED);

    /* Copia arquivo
       move_uploaded_file(ArquivoOrigem,ArquivoDestino)
       Referência: http://php.net/manual/pt_BR/function.move-uploaded-file.php
    */
    $status = move_uploaded_file(  // Se erro retorna FALSE.
        $_FILES["arq1"]["tmp_name"], // ArquivoOrigem
        "arquivo/".$_FILES["arq1"]["name"]); // ArquivoDestino

    if ($status) {
        /*
        A função fopen abre arquivo. Neste exemplo o arquivo é aberto apnas para leitura (segundo parâmetro "r").
        Referência: http://php.net/manual/pt_BR/function.fopen.php
        */
        $a = fopen("arquivo/".$_FILES["arq1"]["name"],"r");
        if ($a) { // Retorna um recurso de ponteiro de arquivo em caso de sucesso, ou FALSE em caso de erro.
            // Referência: https://www.w3schools.com/php/func_filesystem_fgetcsv.asp
            $lin = fgetcsv($a,100,";"); // Desconsidera 1a linha de títulos
            $lin = fgetcsv($a,100,";");
            while($lin!=null) {
                // Atribui valores às vriáveis ligadas ao Insert preparado
                $ID = $lin[0];
                $MN = $lin[1];
                $ED = $lin[2];
                // Execução do Insert compementado com os dados nas variáveis ligadas
                if (!mysqli_stmt_execute($ps)) {
                    $erro[count($erro)]="Linha ID={$lin[0]} não inserida";
                }
                $lin = fgetcsv($a,100,";");
            }
            fclose($a);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <title>Upload</title>
  </head>
  <body>
    <h3>
      <?php
        foreach($erro as $i=>$v) {
            echo $v."<br/>";
        }
      ?>
</h3>
</body>
</html>