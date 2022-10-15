<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades</title>
</head>
<body>
    <div>
        <h1>Formulário soma</h1>
        <p>Escreva um programa PHP para calcular a 
            soma dos dois valores inteiros fornecidos. 
            Se os dois valores forem iguais, 
            retornará o triplo de sua soma;</p>
        <form action="resultado1.php" method="post">
            Valor 1
            <input type="number" name="valor1" default=0>
            <p></p>
            valor 2
            <input type="number" name="valor2" default=0>
            <p></p>
            <input type="submit" value="Salvar">
        </form>
        
    </div>
    <div>
    <h1> Exercício 2</h1>
        <form action="resultado2.php" method="post">
            Digite uma palavra
            <input type="text" name="palavra">
            <input type="submit" value="Enviar">
    
        </form>
    </div>
</body>
</html>


