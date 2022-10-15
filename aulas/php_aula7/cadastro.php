<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro aula 7</title>
</head>
<body>
    <div>
        <h1>Cadastro aula 7</h1>
    </div>
    <div>
        <?php
        foreach($_POST as $chave => $valor){
            echo "$chave: $valor <br>";
        }
        ?>
    </div>
    
</body>
</html>
