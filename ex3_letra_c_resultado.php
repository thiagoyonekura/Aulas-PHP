<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Exercício 3 - Letra C</title>
</head>
<body>
    <div>
    <h2>Exercício 3 - Letra C</h2>
    <?php
    $nome = $_POST["nome"];
    $sexo = $_POST["genero"];
    $idade = $_POST["idade"];
    if($idade>25){
        echo "Prezado(a): $nome, gênero: $sexo, você pode se cadastrar.";
    }else{
        echo "Prezado(a): $nome, gênero: $sexo, você não pode se cadastrar, a idade mínima é de 26 anos.";
    }
    ?>
    </div>
</body>
</html>
