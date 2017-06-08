<?php
    include 'assets/includes/header.php';
    include 'assets/includes/menu.php';
    include_once("conexaoBanco.php");
    include_once("editar.php");
$id = "";
$nome = "";
$email = "";
$data = "";
$comentario = "";
$curso = "";
$sexo = "";
?>

<div class="container">

    <h1>Atualize um cadastro</h1>

    <div class="row">
        <div class="col-md-6">
            <form method="GET" action="editar.php">
                <input type="text" name="id" id="nome" class="form-control formulario" placeholder="ID" value="<?=$id?>" pattern="\d{1}"required/>
                <?php include_once 'assets/includes/formulario.php'; ?>
                <input type="submit" name="atualizar" value="Atualizar dados" class="btn formulario">
            </form>
        </div>
    </div>
</div>

<?php
include 'assets/includes/footer.php';
include 'assets/includes/scripts.php';
?>
