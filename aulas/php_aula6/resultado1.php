<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Ex1</title>
</head>
<body>
    <div>
        <h1>Resultado da Soma</h1>
        <?php
        $numero1 =  $_POST["valor1"];
        $numero2 =  $_POST["valor2"];
        $soma = $numero1 + $numero2;

        if($numero1 == $numero2){
            echo "O triplo da soma é:" .($soma*3);
        }else{
            echo "A soma é $soma";
        }
        ?>
    </div>
    
    
</body>
</html>
