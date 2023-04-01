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
       //sequenciais (numéricos)
       //$lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi');
       $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva', 'Abacaxi'];

        $lista_frutas[] = 'Abacate';

        /*
        echo '<pre>';
            var_dump($lista_frutas);
        echo '<pre>';
        echo '<hr/>';
        echo '<pre>';
            print_r($lista_frutas);
        echo '<pre>';
        

        echo $lista_frutas[3];
        */

       //associativos
       $lista_frutas = array(
            'a' => 'Banana',
            'b' => 'Maçã',
            'c' => 'Morango',
            'd' => 'Uva',
            'e' => 'Abacaxi');

        $lista_frutas['x'] = 'Laranja';
        echo '<pre>';
            var_dump($lista_frutas);
        echo '<pre>';

        
        echo $lista_frutas['c'];
    ?>

</body>
</html>