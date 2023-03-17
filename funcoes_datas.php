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
       //recuperação da data atual / data corrente
        echo date('d/m/Y H: i');

        //dia/mes/ano/horas/minutos

        echo '<br/>';
        echo date_default_timezone_get();
        date_default_timezone_set('America/Bahia_Banderas');
        echo '<br/>';
        echo date('d/m/Y H: i');
        */

        $data_inicial = '2023-03-17';
        $data_final = '2023-05-15';

        //timestamp
        //01/01/1970 -- 2023-03-17

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);

        echo $data_inicial . ' - ' .$time_inicial;
        echo '<br/>';
        echo $data_final . ' - ' .$time_final;

        $diferenca_times = abs($time_inicial - $time_final); //abs
        $diferenca_times = $time_final - $time_inicial;

        echo '<br/>';
        echo 'A diferença de segundo entre a data inicial e final é: ' . $diferenca_times;

        $segundos_existem_dia = 24 * 60 * 60;

        echo '<br/>';
        echo 'Um dia possui ' . $segundos_existem_dia . ' segundos';

        $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;
        
        echo '<br/>';
        echo 'A diferença em dias é: '.$diferenca_de_dias_entre_as_datas;

       
    ?>

</body>
</html>