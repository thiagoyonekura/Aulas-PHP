<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Letra C</title>
</head>
<body>
    <div>
        <h1>Formulário para exibir nome, gênero e idade</h1>
        <h2>Digite seu nome, sexo e idade nos respectivos campos: </h2>
        <form action="ex3_letra_c_resultado.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <p></p>
        <label for="sexo">Sexo(M ou F)</label>
        <input type="sex" id="sexo" name="sexo">
        <p></p>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade">
        <p></p>
        <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>