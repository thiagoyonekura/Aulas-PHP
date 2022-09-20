<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 6 exercícios</title>
</head>
<body>
    <div>
        <h2>Exercício 3</h2>
        <?php
        for($i = 1; $i <= 10; $i++){
            if($i < 10){
            echo "$i - ";}
            else{
                echo " $i <br>";
            }
        }
        ?>
    </div>
    <div>
        <h2>Exercício 4</h2>
        <?php
        for($x = 1; $x <= 5; $x++){ // Contador de
            for($z = 1; $z <= $x; $z++){ //contador de *
            echo"* ";} 
            echo"<br>";
        }
        ?>
    </div>
    <div>
        <h2>Exercício 5</h2>
        <?php
        for($linha = 1; $linha <= 7; $linha++){
            if($linha == 1 || $linha == 7){
                echo "* * * * * <br>";
            }else if($linha==4){
                echo "* * * * <br>";
            }else{
                echo "* <br>";
            }
        }
        ?>
    </div>
</body>
</html>