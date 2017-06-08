<?php
/**
 * Created by PhpStorm.
 * User: Jonatas Lopes
 * Date: 03/06/2017
 * Time: 14:08
 */
?>
    <input type="text" name="id" id="nome" class="form-control formulario" placeholder="ID" value="<?=$id?>"required/>
    <input type="text" name="nome" id="nome" class="form-control formulario" placeholder="Nome" value="<?=$id?>" required/>
    <input type="text" name="email" id="email" class="form-control formulario" placeholder="E-mail" value="<?=$id?>" required/>
    <input type="date" name="data" id="data" class="form-control formulario" placeholder="Data de Nascimento" max="1999-12-31" value="<?=$id?>" required/>
    <textarea name="comentario" id="comentario" class="form-control formulario" placeholder="Escreva um comentário"> <?=$id?></textarea>
    <select name="curso" id="curso" class="form-control formulario">
        <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
        <option value="Comércio Exterior">Comércio Exterior</option>
        <option value="Gestão Empresarial">Gestão Empresarial</option>
        <option value="Processos Químicos">Processos Químicos</option>
    </select>
    <div class="formulario">
        <label class="radio-inline" for="masculino">
            <input type="radio" name="sexo" id="sexo" value="Masculino" id="msaculino"/> Masculino
        </label>
        <label class="radio-inline" for="feminino">
            <input type="radio" name="sexo" id="sexo" value="Feminino" id="feminino"/> Feminino
        </label>
    </div>

<!--
<form action="enviarCSV.php" method="POST">
    <div class="formulario">
        Ou cadastre-se por arquivo csv:
        <input type="file" name="arquivo" id="arquivo">
        <input type="submit" name="enviarCSV" value="Enviar" class="btn formulario">
    </div>
-->