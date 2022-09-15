<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Exercício 3 - Letra D</title>
</head>

<body>
    <div>
        <h2>Exercício 3 - Letra D</h2>
        <?php
        $mes = $_POST["mes"];
        
        if ((1 <= $mes) && (12 >= $mes)) {
            echo "O número $mes corresponde ao mês de ";
            switch ($mes) {
                case 1:
                    echo "Janeiro.";
                    break;
                case 2:
                    echo "Fevereiro.";
                    break;
                case 3:
                    echo "Março.";
                    break;
                case 4:
                    echo "Abril.";
                    break;
                case 5:
                    echo "Maio.";
                    break;
                case 6:
                    echo "Junho.";
                    break;
                case 7:
                    echo "Julho.";
                    break;
                case 8:
                    echo "Agosto.";
                    break;
                case 9:
                    echo "Setembro.";
                    break;
                case 10:
                    echo "Outubro.";
                    break;
                case 11:
                    echo "Novembro.";
                    break;
                case 12:
                    echo "Dezembro.";
                    break;
            }
        } else {
            echo " Não existe mês correspondente ao número $mes ";
        }
        ?>
    </div>
</body>

</html>