<?php
include 'assets/includes/header.php';
include 'assets/includes/menu.php';
?>

<div class="container">

    <h1>Atualize um cadastro</h1>

    <div class="row">
        <div class="col-md-6">
            <?php include_once 'assets/includes/formulario.php'; ?>
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
