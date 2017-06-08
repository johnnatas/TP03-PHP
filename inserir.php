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
                <form action="insereBanco.php" method="POST">
                    <?php include_once 'assets/includes/formulario.php'; ?>
                    <input type="submit" name="inserir" value="Inserir dados" class="btn formulario">
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
