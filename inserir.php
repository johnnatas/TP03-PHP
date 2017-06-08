<?php
    include 'assets/includes/header.php';
    include 'assets/includes/menu.php';
    $id = "";
    $nome = "";
    $email = "";
    $data = "";
    $comentario = "";
    $curso = "";
    $sexo = "";
?>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form action="insereBanco.php" method="GET">
                    <input type="text" name="id" id="id" class="form-control formulario" placeholder="ID" value="<?=$id?>" pattern="\d{1}"required/>
                    <?php include_once 'assets/includes/formulario.php'; ?>
                    <input type="submit" name="inserir" value="Inserir dados" class="btn formulario">
                    <?php

                    ?>
                </form>
                <form action="enviarCSV.php" method="POST" enctype="multipart/form-data" id="enviarCSV">
                    <div class="formulario">
                        Ou cadastre-se por arquivo csv:
                        <input type="file" accept="text/csv" name="aluno-csv" id="aluno-csv" required>
                        <input type="submit" name="enviarCSV" value="Enviar" class="btn formulario">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
              <?php
                include 'Classes/Banco.php';
                $banco = new Banco();
                $banco->listar();
              ?>
            </div>
        </div>
    </div>

<?php
    include 'assets/includes/footer.php';
    include 'assets/includes/scripts.php';
?>
