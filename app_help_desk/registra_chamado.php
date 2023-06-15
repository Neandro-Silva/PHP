<?php

   echo '<pre>';
   print_r($_POST);
   echo '</pre>';

   //trabahando na montagem do texto
   $titulo = str_ireplace('#', '-', $_POST['titulo']);
   $categoria = str_ireplace('#', '-', $_POST['categoria']);
   $descricao = str_ireplace('#', '-', $_POST['descricao']);

   // implode('#', $_POST);

   $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

   //abrindo o arquivo
   $arquivo = fopen('arquivo.hd', 'a');

   //escrevendo o texto
   fwrite($arquivo, $texto);

   //fechado o arquivo
   fclose($arquivo);

   //echo $texto;
   header('Location: abrir_chamado.php');
?>