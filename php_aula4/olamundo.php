<?php
    //http://localhost/aula4/exemplo1.php
    /*
    Comentário de várias linhas
    */
    echo 
    "<h1>Variável PHP </h1>";
    $idade = 25;
    $nome = "Thiago Yonekura";
    echo 'Olá '.$nome.'! Seja bem vindo! <br>';
    echo "Sua idade é $idade.";
    //Operadores matemáricos
    echo "<h2>Operadores matemáticos </h2>";
    $valorA = 5;
    $valorB = 2;

    $soma = $valorA + $valorB;
    echo "<p>Soma: $valorA + $valorB = $soma </p>";
    $subtracao = $valorA - $valorB;
    echo "<p>Subtração: $valorA - $valorB = $subtracao </p>";
    $multiplicacao = $valorA * $valorB;
    echo "<p>Multiplicação: $valorA * $valorB = $multiplicacao </p>";
    $divisao = $valorA / $valorB;
    echo "<p>Multiplicação: $valorA / $valorB = $divisao </p>";
    $pot = $valorA ** $valorB;
    echo "<p>Potência: $valorA ** $valorB = $pot </p>";
    $resto = $valorA % $valorB;
    echo "<p>Resto divisão: $valorA % $valorB = $resto </p>";
    // Dicas!
    // ver o tipo de variável
    echo gettype($resto);
?>
