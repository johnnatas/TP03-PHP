<!--/**
 * Created by PhpStorm.
 * User: Leonardo
 * Date: 07/06/2017
 * Time: 03:07
 */-->

<!doctype html>
    <head></head>
    <body>
        <form>
            <label for="nome">Nome:</label>
            <input type="text" placeholder="Nome" id="nome" name="nome"required>
            <label for="email">E-mail:</label>
            <input type="text" placeholder="E-mail"id="email" name="email"required>
            <label type="nascimento">Data de Nascimento:</label>
            <input type="date" placeholder="Data de Nascimento" max="1999-12-31" id="nascimento" name="nascimento"required>
            <label for="masc">Masculino</label>
            <input type="radio" name="sexo" id="masc"required>
            <label for="fem">Feminino</label>
            <input type="radio" name="sexo" id="fem"required>
            <input list="cursos" required>
            <datalist id="cursos">
                <option value="Análise e Desenvolvimento de Sistemas">Análise e Desenvolvimento de Sistemas</option>
                <option value="Comércio Exterior">Comércio Exterior</option>
                <option value="Gestão Empresarial">Gestão Empresarial</option>
                <option value="Processos Químicos">Processos Químicos</option>
            </datalist>
            <textarea row="5" col="20" placeholder="Escreva aqui um comentário.."></textarea>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>