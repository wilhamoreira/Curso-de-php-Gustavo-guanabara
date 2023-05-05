<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <?php 
        $cotacao = 4.98;
        $real = $_GET["dinheiro"] ?? 0;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        $dolar = $real / $cotacao;

        echo "<p>Seus <strong>" . numfmt_format_currency($padrao, $real, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";

        //echo "<p>Seus R$" . number_format($real, 2, ",", ".") . "equivalem a US$ " .  number_format($dolar, 2, ",", ".") . "</p>";
        ?>    
        <button onclick="javascript:history.go(-1)">Voltar</button>
    
    </main>
</body>
</html>