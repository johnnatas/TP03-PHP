<?php
/**
 * Created by PhpStorm.
 * User: Jonatas Lopes
 * Date: 03/06/2017
 * Time: 14:08
 */
?>

<form action="" method="post">
    <input type="text" name="num" class="form-control formulario" placeholder="ID" required/>
    <input type="text" name="nome" class="form-control formulario" placeholder="Nome" required/>
    <input type="text" name="email" class="form-control formulario" placeholder="E-mail" required/>
    <input type="date" name="data" class="form-control formulario" placeholder="Data de Nascimento" max="1999-12-31" required/>
    <textarea name="comentario" class="form-control formulario" placeholder="Escreva um comentário"></textarea>
    <select name="curso" class="form-control formulario">
        <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
        <option value="Comércio Exterior">Comércio Exterior</option>
        <option value="Gestão Empresarial">Gestão Empresarial</option>
        <option value="Processos Químicos">Processos Químicos</option>
    </select>
    <div class="formulario">
        <label class="radio-inline" for="masculino">
            <input type="radio" name="sexo" value="M" id="msaculino"/> Masculino
        </label>
        <label class="radio-inline" for="feminino">
            <input type="radio" name="sexo" value="F" id="feminino"/> Feminino
        </label>
    </div>
    <input type="submit" name="inserir" value="Inserir dados" class="btn formulario">
</form>
<form action="enviarCSV.php" method="post">
    <div class="formulario">
        Ou cadastre-se por arquivo csv:
        <input type="file" name="arquivo" id="arquivo">
        <input type="submit" name="enviarCSV" value="Enviar" class="btn formulario">
    </div>
</form>