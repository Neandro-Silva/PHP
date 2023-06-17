<?php

   session_start();
   //trabahando na montagem do texto
   $titulo = str_ireplace('#', '-', $_POST['titulo']);
   $categoria = str_ireplace('#', '-', $_POST['categoria']);
   $descricao = str_ireplace('#', '-', $_POST['descricao']);

   // implode('#', $_POST);

   $texto =$_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

   //abrindo o arquivo
   $arquivo = fopen('../../../../app_help_desk/arquivo.hd', 'a');

   //escrevendo o texto
   fwrite($arquivo, $texto);

   //fechado o arquivo
   fclose($arquivo);

   //echo $texto;
   header('Location: abrir_chamado.php');
?>