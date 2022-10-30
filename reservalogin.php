<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="meuestilo.css">
    <title>Reservas</title>
</head>

<body>
    <div>
        <div>
        <nav>
        <div class="logo">Logo</div>
        <a href="#">Cardápio</a>
        <a href="#">Localização</a>
        <a href="#">Reservas</a>
        <a href="#">Contato</a>
        <a href="#">Cadastro</a>
        <a href="#">Login</a>

    </nav>

        </div>
    <div>
        Reservas
    </div>
    <div>
        <form action="reservacadastro.php" method="post">
            <label>Login: </label><input type="text" name="login" id="login"><br>
            <label>Senha: </label><input type="password" name="senha" id="senha"><br>
            <input type="submit" value="Entrar" id="entrar" name="entrar">
        </form>
    </div>
    <div>
        Caso ainda não possua cadastro <a href="cadastro.php">Clique aqui</a>
    </div>
    <div>
        <a href="index.php">Voltar para o Home</a>  
    </div>
    </div>
</body>

</html>