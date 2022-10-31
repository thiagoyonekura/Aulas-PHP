<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reserva.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <title>Reservas</title>
</head>

<body>
    <div>
        <div>
        <?php include("menu-header.php"); ?>
        </div>
    <div>
        <h1>Reservas</h1>
    </div>
    <div>
        <form action="reservacadastro.php" method="post">
            <label>Login: </label><input type="text" name="login" id="login"><br>
            <p></p>
            <label>Senha: </label><input type="password" name="senha" id="senha"><br>
            <p></p>
            <input type="submit" value="Entrar" id="entrar" name="entrar">
        </form>
    </div>
    <p></p>
    <div>
        Caso ainda não possua cadastro <a href="cadastro.php">Clique aqui</a>
    </div>
    
    </div>
</body>

</html>