<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de php</title>
</head>
<body>
    <h1>Exemplo de PHP</h1>
    <?php 
        //escolhendo a timezone
        date_default_timezone_set("America/Sao_Paulo");
        //mostrando a data e a hora 
        echo "Hoje é dia " . date("d/M/Y");
        echo "e a hora atual é " .date("G:i:s");
    ?>
</body>
</html>