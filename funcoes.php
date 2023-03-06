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
       
       //void (sem retorno)
       function exibirBoasVindas() {
        echo "Olá, seja bem vindo! <br/>";
       }
       exibirBoasVindas();

       //return (com retono)
       function calcularArea($largura, $altura) {
        $area = $largura * $altura;
        return $area;
       }
       
       $resultado = calcularArea(7,3);
       echo $resultado;
    ?>

</body>
</html>