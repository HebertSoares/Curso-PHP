<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP</title>
</head>
<body>
    <?php

        $nome = 'Crebsu';
        $cor = 'verde';
        $idade = 25;
        $atividade_preferida = 'andar de carro';

        //operador .

        echo 'Olá '.$nome.', vi que sua cor preferida é '.$cor.', estou vendo também que você tem '.$idade.' anos e gosta de '.$atividade_preferida.'';
        
        echo '<br />';

        echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você tem $idade anos e gosta de $atividade_preferida";

    ?>
</body>
</html>