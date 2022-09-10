<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 5 - PHP</title>
</head>
<body>
    <div>
        <h1>GET e POST + Controle de Fluxo (IF/ ELSE)</h1>
    </div>
    <div>
        <h2>Váriaveis Globais</h2>
        <p>
            <?php
                echo $_SERVER["SERVER_PORT"];
            ?>    
        </p>
    </div>
    <div>
        <h2>Constantes</h2>
        <p>
            Definindo uma constante
            <?php
            define('SAUDACAO','*Olá eu sou uma constante!');
            echo SAUDACAO;
            const CONSTANTE = 10;
            echo CONSTANTE;
            ?>
        </p>
        <div>
            <h2>Formulários (GET e POST)</h2>
            <p>
                <a href="formulario.html">Primeiro formulário PHP</a>
               
            </p>
            <p>
                <a href="calculo.php">Calcular média - POST</a>
               
            </p>
        </div>
    </div>
</body>
</html>
