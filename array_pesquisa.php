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
/*
        //in_array() -> retorna true ou false
        //array_search() -> retorna o index do respectivo valor ou null, se não existir */
        
        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

       /* echo '<pre>';
        print_r($lista_frutas);
        echo '</pre>'; 

        /*echo in_array('Maçã', $lista_frutas); //caso exista, retorna 1, se não, vazio

        //outra forma
        $existe = in_array('Maçã', $lista_frutas);
        if($existe) {
            echo 'sim, existe';
        } else {
            echo 'não, não existe';
        }*/

        //outro método 
    /*  echo array_search('Uva', $lista_frutas); //caso exista, retorna o index, se não, null

        //outra forma
        $existe = array_search('Uva', $lista_frutas);

        if($existe != null) {
            echo 'sim, existe';
        } else {
            echo 'não, não existe';
        }*/

        //array multidimensional
        $listas_coisas = [
            'frutas' => $lista_frutas,
            'pessoas' => ['joão', 'maria']
        ];

        echo '<pre>';
        print_r($listas_coisas);
        echo '</pre>'; 

        echo in_array('Uva', $listas_coisas['frutas']);

    ?>
</body>
</html>