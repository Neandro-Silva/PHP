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

       $registros = array(
            array('titulo' => 'Titulo notícia 1', 'conteudo' => 'Conteúdo da notícia 1'),
            array('titulo' => 'Titulo notícia 2', 'conteudo' => 'Conteúdo da notícia 2'),
            array('titulo' => 'Titulo notícia 3', 'conteudo' => 'Conteúdo da notícia 3'),
            array('titulo' => 'Titulo notícia 4', 'conteudo' => 'Conteúdo da notícia 4')
        );
       
        echo '<pre>';
        print_r($registros);
        echo '</pre>';
        echo '<br><br><br>';
        
        $idx = 0;

        echo 'o array possui : ' .count($registros) . ' registros';
        echo '<br>';

        /*
        while($idx < count($registros)) {

            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '<p>';

            echo '<hr>';

            $idx++;
        } */

        /*
        do {

            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '<p>';

            echo '<hr>';

            $idx++;

        }while($idx < count($registros)); */

        for($idx; $idx < count($registros); $idx++) {
            echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
            echo '<p>' . $registros[$idx]['conteudo'] . '<p>';

            echo '<hr>';
        }
    ?>
</body>
</html>