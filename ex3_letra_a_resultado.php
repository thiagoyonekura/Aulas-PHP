<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Cálculo Soma</title>
</head>

<body>
    <div>
        <h1>Cálculo da soma</h1>
        <?php
        
        $numero1 = $_POST["num1"];
        $numero2 = $_POST["num2"];
        $resultado = ($numero1 + $numero2);
        $resultado2 = ($resultado + 8);
        $resultado3 = ($resultado - 5)

        ?>
        <p>
            <?php echo "O resultado da soma é: $resultado"; ?>
        </p>
        <p>
            <?php
            if ($resultado > 10) {
                echo "Como o resultado da soma é maior que 10, este deverá ser apresentando somando-se a ele mais 8, assim, o novo resultado é: $resultado2.";
            } else if ($resultado <= 10) {
                echo "Como o resultado da soma é menor ou igual a 10, este deverá ser apresentado subtraindo-se 5, assim, o novo resultado é: $resultado3. ";
            }
            ?>
        </p>
    </div>

</body>

</html>