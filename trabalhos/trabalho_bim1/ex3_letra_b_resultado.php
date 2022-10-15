<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Exercício 3 - Letra B</title>
</head>

<body>
    <div>
        <h1>Exibir os três números em ordem decrescente:</h1>
        
        <?php
        $num1 = $_POST["valor1"];
        $num2 = $_POST["valor2"];
        $num3 = $_POST["valor3"];
        if (($num1 < $num2) && ($num2 < $num3)) {
            echo "Os três números na ordem decrescente são: $num3 - $num2 - $num1.";
        } else if (($num2 < $num1) && ($num1 < $num3)) {
            echo "Os três números na ordem decrescente são: $num3 - $num1 - $num2.";
        } else if (($num3 < $num1) && ($num1 < $num2)) {
            echo "Os três números na ordem decrescente são: $num2 - $num1 - $num3.";
        } else if (($num1 < $num3) && ($num3 < $num2)) {
            echo "Os três números na ordem decrescente são: $num2 - $num3 - $num1.";
        } else if (($num3 < $num2) && ($num2 < $num1)) {
            echo "Os três números na ordem decrescente são: $num1 - $num2 - $num3.";
        } else if (($num2 < $num3) && ($num3 < $num1)) {
            echo "Os três números na ordem decrescente são: $num1 - $num3 - $num2.";
        }
        ?>

    </div>
</body>

</html>
