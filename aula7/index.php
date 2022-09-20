<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 7</title>
</head>
<body>
    <div>
        <h1>Formulário PHP</h1>
    </div>
    <div>
        <form action="cadastro.php" method="post">
        <p>Nome: <input type="text" name="nome"> </p>
        <p>Nascimento: <input type="date" name="nascimento"> </p>
        <p>Celular: <input type="tel" name="fone"> </p>
        <p>E-mail: <input type="email" name="email"> </p>
        <p>Senha: <input type="password" name="senha"> </p>
        <p>Aceita os <a href="https://www.gov.br/cidadania/pt-br/acesso-a-informacao/lgpd">termos da LGPD?</a>  </p>
        <br>
        <input type="radio" name="lgpd" id="sim"> Sim
        <input type="radio" name="lgpd" id="nao"> Não
        <p>
            Gênero
            <select name="genero">
                <option value="F">Feminino</option>
                <option value="M">Masculino</option>
                <option value="NB">Não Binário</option>
            </select>
        </p>
        <p>
            Tamanho do calçado
            <input type="number" name="calcado" min="33" max="46">
        </p>
        <p>
            Por onde deseja receber Notificações?
        </p>
        <p>
            <input type="checkbox" name="notsms"> SMS
            <input type="checkbox" name="notemail"> E-mail
            <input type="checkbox" name="notwhats"> WhatsApp
        </p>
        <input type="submit" value="Cadastrar">
</form>
    </div>
    
</body>
</html>