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

        $x = 10;
        do {
            echo 'entrou no bloco do while';
        }while($x < 9);

        echo '<br>';
        while($x < 9) {
            echo 'entrou no bloco while';
        }
    ?>
</body>
</html>