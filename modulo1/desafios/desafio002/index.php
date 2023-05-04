<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio php</title>
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <p>Gerando um numero aleatório entre 0 e 100</p>
        <?php 
            $minimo = 0;
            $maximo = 100;
            $numero_sorteado = mt_rand($minimo, $maximo);
            echo "<p>O valor gerado é <strong>$numero_sorteado</strong></p>";
        ?>
        <button onclick="javascript:document.location.reload()">&#x1F505; denovo</button>

    </main>    
</body>
</html>