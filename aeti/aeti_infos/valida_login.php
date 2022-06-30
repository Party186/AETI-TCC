<?php
    session_start();
    $_SESSION['valor'] = 123;
    $usuario_identificado = false;
    $usuarios_app = array(
        array('usuario' => 'adm@teste.com.br', 'senha' => '123456'),
        array('usuario' => 'user@teste.com.br', 'senha' => 'abcd'),
    );
    foreach($usuarios_app as $user){
        $user['usuario'];
        $user['senha'];
        if($user['usuario'] == $_POST['usuario'] && $user['senha'] == $_POST['senha']){
            $usuario_identificado = true;
        }
    }
    if($usuario_identificado == true){
        echo "Voce está logado, olá " . $_POST['email'];
        $_SESSION['autenticado'] = 'sim';
        header ('Location: principal.php');
    }else{
        header ('Location: login.php?login=erro');
        $_SESSION['autenticado'] = 'nao';
    }
    echo $_SESSION['autenticado'];
?>