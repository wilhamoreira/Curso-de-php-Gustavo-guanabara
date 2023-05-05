<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Analisador de Número Real</h1>
        
        <?php 
            $numero = $_GET["numero"] ?? 0;

            echo "<p>Analisando o numero <strong>". number_format($numero, 3, ",", ".") ."</strong> Informado pelo usuario</p>";

            $parteInteira = (int) $numero;
            $parteFracionaria = $numero - $parteInteira;
            echo "<ul>
            <li> A parte inteira é <strong>". number_format($parteInteira, 0, ",", ".") ."</strong></li>
            <li> A parte inteira é <strong>". number_format($parteFracionaria, 3, ",", ".") ."</strong></li>
            </ul>";
        

        ?>
        <button onclick="javascript:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>