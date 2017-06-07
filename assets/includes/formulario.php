<?php
/**
 * Created by PhpStorm.
 * User: Jonatas Lopes
 * Date: 03/06/2017
 * Time: 14:08
 */
?>

<form action="" method="post">
    <input type="text" name="nome" class="form-control formulario" placeholder="Nome" required/>
    <input type="text" name="email" class="form-control formulario" placeholder="E-mail" required/>
    <input type="text" name="data" class="form-control formulario" placeholder="Data de Nascimento" max="31-12-1999" required/>
    <input type="text" name="num" class="form-control formulario" placeholder="ID" required/>
    <textarea name="comentario" class="form-control formulario" placeholder="Escreva um comentário"></textarea>
    <select name="dropdown" class="form-control formulario">
        <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
        <option value="Comércio Exterior">Comércio Exterior</option>
        <option value="Gestão Empresarial">Gestão Empresarial</option>
        <option value="Processos Químicos">Processos Químicos</option>
    </select>
    <div class="formulario">
        <label class="radio-inline" for="masculino">
            <input type="radio" name="sexo" value="Masculino" id="msaculino"/> Masculino
        </label>
        <label class="radio-inline" for="feminino">
            <input type="radio" name="sexo" value="Feminino" id="feminino"/> Feminino
        </label>
    </div>
    <input type="submit" name="inserir" value="Inserir dados" class="btn formulario">
</form>
<form action="" method="post">
    Ou cadastre-se por arquivo csv:
    <input type="file" name="arquivo" id="arquivo">
    <input type="submit" name="enviarCSV" value="Enviar" class="btn formulario">
</form>