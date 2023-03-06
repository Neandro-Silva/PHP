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
       
       function calcularImposto($val) {
        
        $imposto = 0;
        if($val <= 1903.98) {
            $imposto = 0;
        }elseif($val >= 1903.99 && $val <= 2826.65) {
            $imposto = $val * 0.075;
        }elseif($val >= 2826.66 && $val <= 3751.05) {
            $imposto = $val * 0.15;
       }elseif($val >= 3751.06 && $val <= 4664.68) {
            $imposto = $val * 0.225 ;
       }else{
         $imposto = $val *= 0.275;
       }
       return $imposto;

    }

    echo calcularImposto(2500);
    ?>

</body>
</html>