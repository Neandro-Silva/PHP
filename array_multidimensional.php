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

        //$listas_coisas = array();
        $listas_coisas = [];

        $listas_coisas['frutas'] = array(1 => 'Banana', 2 => 'Maçã', 3 => 'Morango', 4 => 'Uva');
        $listas_coisas['pessoas'] = [1 => 'João', 2 => 'José', 3 => 'Maria'];

        echo '<pre>';
        print_r($listas_coisas);
        echo '</pre>';

        echo '<hr>';
        
        echo $listas_coisas['frutas'][3];
        echo '<br>';
        echo $listas_coisas['pessoas'][2];
    ?>
</body>
</html>