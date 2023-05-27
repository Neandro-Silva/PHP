<?php

    session_start();

    //variavel que verifica se a autenticação foi realizada
    $usuarios_autenticado = false;

    //usuarios do sistema
    $usuarios_app = array(
        array('email' => 'asm@teste.com.br', 'senha' => '123456'),
        array('email' => 'user@teste.com.br', 'senha' => 'adbhj'),
    );

    /*
    echo '<pre>';
    print_r($usuarios_app);
    echo '</pre>';*/

    foreach($usuarios_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $usuarios_autenticado = true;
        }
        if($usuarios_autenticado) {
            echo 'Usuário autenticado';
            $_SESSION['autenticado'] = 'sim';
        } else {
            $_SESSION['autenticado'] = 'não';
            header('Location: index.php?login=erro');
        }
    }

    /*
    print_r($_GET);

    echo '<br>';
    echo $_GET['email'];
    echo '<br>';
    echo $_GET['senha'];

    print_r($_POST);

    echo '<br>';
    echo $_POST['email'];
    echo '<br>';
    echo $_POST['senha'];*/
?>