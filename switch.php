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

        $parametro = '2 ';
       
       switch($parametro) {
        case 1:
            echo 'case 1 acionado';
            break;
        case 2:
            echo 'case 2 acionado';
            break;
        case 3:
            echo 'case 3 acionado';
            break;
        default:
            echo 'valor inválido';
            break;
       }
    ?>

</body>
</html>