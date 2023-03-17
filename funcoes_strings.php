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
       
       $texto = 'Curso completo de PHP';

       //string to lower
       echo $texto . '<br/>';
       echo strtolower($texto);

       echo '<hr/>';

       //string to upper
       echo $texto . '<br/>';
       echo strtoupper($texto);

       echo '<hr/>';

       //upper case first
       echo $texto . '<br/>';
       echo ucfirst($texto);

       echo '<hr/>';

       //string length
       echo $texto . '<br/>';
       echo strlen($texto);

       echo '<hr/>';

       //string replace
       echo $texto . '<br/>';
       //echo str_replace('PHP', 'JavaScript', $texto);
       echo str_replace('.', ',', '22.20');

       echo '<hr/>';

       //string substr
       echo $texto . '<br/>';
       //'Curso completo de PHP'
       //0,1,2,3,4,5...20
       //echo substr($texto, 6, 8); completo
       echo substr($texto, 0, 14) . ' ...';
    ?>

</body>
</html>