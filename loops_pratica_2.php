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

        $funcionarios = array(
            array('nome' => 'João', 'salario' => 2500, 'data_nacimento' => '03/05/1996'), 
            array('nome' => 'Maria', 'salario' => 2800),
            array('nome' => 'Júlia', 'salario' => 2400),
            array('nome' => 'Júlia', 'salario' => 2400),
        );

        echo '<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $idx => $funcionario) {

            foreach($funcionario as $idx2 => $valor) {
                echo "$idx2 - $valor <br>";
            }
            echo '<hr>';
        }
       
    ?>
</body>
</html>