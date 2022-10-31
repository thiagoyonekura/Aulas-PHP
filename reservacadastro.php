<!DOCTYPE html>
<html lang="en">
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
    <?php include("menu-header.php"); ?>
    </div>
    <div>
    <h1>Reservas</h1>
    </div>
    <div>
        <form action="confirmareserva.php" method="post">
        <label for="name">Nome</label>
        <input type="text" name="nome" placeholder="">
        <p></p>
          <label for="data">Data</label>
        <input type="date" name="data" id="data">
        <p></p>
        <label for="qtdpessoa">Quantidade de pessoas</label>
        <select name="qtdpessoa" id="qtdpessoa">
            <option value="1">1 pessoa</option>
            <option value="2">2 pessoas</option>
            <option value="3">3 pessoas</option>
            <option value="4">4 pessoas</option>
            <option value="5">5 pessoas</option>
            <option value="6">6 pessoas</option>
            <option value="7">7 pessoas</option>
            <option value="8">8 pessoas</option>
            <option value="9">9 pessoas</option>
            <option value="10">10 pessoas</option>
            <option value="11">11 pessoas</option>
            <option value="12">12 pessoas</option>
            <option value="13">13 pessoas</option>
            <option value="14">14 pessoas</option>
            <option value="15">15 pessoas</option>
            <option value="16">16 pessoas</option>
            <option value="17">17 pessoas</option>
            <option value="18">18 pessoas</option>
            <option value="19">19 pessoas</option>
            <option value="20">20 pessoas</option>
        </select>
        <p></p>
        <label for="horario">Data e Hora</label>
        <input type="datetime-local" name="horario" id="horario">
        <p></p>
        <label for="ocasiao">Ocasião</label>
        <input type="text" name="ocasiao" placeholder="exemplo: aniversário, confraternização,...">
        <p></p>
        <input type="submit" value="Fazer Reserva">
        </form>
    </div>

</body>
</html>