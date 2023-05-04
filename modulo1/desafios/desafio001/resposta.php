<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <main>
        <h1>Resultado</h1>
        <p>
            <?php 
                $numero = $_GET["numero"] ?? 0;
                $antencessor = $numero - 1;
                $sucessor = $numero + 1;

                echo "O número escolhido foi <strong>$numero</strong>";
                echo "<br>O seu antecessor é <em>$antencessor</em>";
                echo "<br>O seu sucessor é <em>$sucessor</em>";


            ?>
        </p>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>

        <!-- <button onclick="javascript:window.location.href='index.html'">&#x2B05;Voltar</button> -->

    </main>
</body>
</html>