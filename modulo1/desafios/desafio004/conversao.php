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
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url), true);
            
            //var_dump($dados);

            $cotacao = $dados["value"][0]["cotacaoCompra"];
            echo $cotacao;

            
            $real = $_GET["dinheiro"] ?? 0;

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $dolar = $real / $cotacao;

            echo "<p>Seus <strong>" . numfmt_format_currency($padrao, $real, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong></p>";

            //echo "<p>Seus R$" . number_format($real, 2, ",", ".") . "equivalem a US$ " .  number_format($dolar, 2, ",", ".") . "</p>";

        ?>           
    </main>
    
</body>
</html>