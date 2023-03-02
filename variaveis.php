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

        //string
        $nome = "Neandro";

        //int
        $idade = 25;

        //float
        $peso = 60.0;

        //boolean
        $fumante_sn = false; //(true = 1) ou (false = vazio)

    ?>

    <h1>Ficha cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p>
    <p>Idade: <?= $idade ?></p>
    <p>peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>
</body>
</html>