<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Testes de tipos primitivos</h1>
    <?php 
        //0x = hexadecimal 0b = binario 0 = octal
        $numero = 300;
        $numero2 = 0x1A;
        $numero3 = 010;

        echo "O valor da variável é $numero3";

        //mostrando o valor e o tipo 
        $variavel = 300;
        var_dump($variavel);

        //coerção
        $num = (integer) "950";
        var_dump($num);

        // tipos de variáveis compostos
        $vetor = [ "pedro", 5, false];
        var_dump($vetor)


        
    ?>
</body>
</html>