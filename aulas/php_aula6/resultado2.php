<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <div>
        <h1>Texto com if</h1>
        <?php
        $texto = $_POST["palavra"];
        //str_contains()
        if(str_starts_with($texto, "if")){
            echo $texto;
        }else{
            echo "if $texto";
        }
        ?>
    </div>
    
</body>
</html>
