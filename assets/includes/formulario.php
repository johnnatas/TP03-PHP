<?php
/**
 * Created by PhpStorm.
 * User: Jonatas Lopes
 * Date: 03/06/2017
 * Time: 14:08
 */
?>

<form action="" method="post">
    <input type="text" name="nome" class="form-control formulario" />
    <input type="text" name="email" class="form-control formulario" />
    <input type="text" name="data" class="form-control formulario" />
    <input type="text" name="num" class="form-control formulario" />
    <textarea name="valtxt" class="form-control formulario"></textarea>
    <textarea name="txtlinhas" class="form-control formulario"></textarea>
    <select name="dropdown" class="form-control formulario">
        <option value="umacoisa">Uma Coisa</option>
        <option value="duascoisas">Duas Coisas</option>
        <option value="trescoisas">Três Coisas</option>
        <option value="quatocoisas">Quatro Coisas</option>
    </select>
    <div class="formulario">
        <label class="radio-inline">
            <input type="radio" name="rdb" value="1"/> 1
        </label>
        <label class="radio-inline">
            <input type="radio" name="rdb" value="2"/> 2
        </label>
        <label class="radio-inline">
            <input type="radio" name="rdb" value="3"/> 3
        </label>
    </div>

    <input type="submit" name="inserir" value="Inserir dados" class="btn formulario">
</form>
