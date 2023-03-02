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

        $nome = 'Maria';
        $cor = 'amarela';
        $idade = 25;
        $atividade_preferida = 'andar de bicicleta';

        //operador .

        echo 'olá, ' . $nome . ', vi que sua cor preferida é ' . $cor . ', estou vendo também que você tem ' . $idade . ' anos e sua atividade preferida é ' . $atividade_preferida;

        //aspas duplas

        echo '<br/>';

        echo "olá, $nome, vi que sua cor preferida é $cor, estou vendo também que você tem $idade anos e sua atividade preferida é $atividade_preferida"
    ?>
</body>
</html>