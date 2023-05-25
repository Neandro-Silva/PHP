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

        $num = 1;
        //operadores comparação /lógicos
        echo '---início---<br>';
        while($num < 10) {
            
            $num += 1;

           if($num == 2 || $num == 6) {
            continue;
           }

            echo "$num <br>";

            /*
            if($num >= 100) {
                break;
            }*/
           
            
        }
        echo '---fim---<br>';
    ?>
</body>
</html>