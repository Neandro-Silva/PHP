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

        //gettype() => retorna o tipo da variável
        $valor = 10;
        //$valor2 = (float) $valor; //float ou double
        $valor2 = (string) $valor; //

        echo $valor. ' ' . gettype($valor);
        echo '<br/>';
        echo $valor. ' ' . gettype($valor2);
    ?>

</body>
</html>