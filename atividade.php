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

        $valores = array();
        
        for($x = count($valores); $x < 6; $x++) {
            $num = rand(1,60);
            if(!in_array($num, $valores)) {
                $valores[] = $num;
            }
        }
       print_r($valores);
    ?>
</body>
</html>