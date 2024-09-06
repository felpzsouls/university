<?php
//variaveis fixas definidas
    define("USER1", "felpz");
    define("PWD1", "123456");
    
//valores puxados do formulário
    $user2 = $_POST['user'] ?? '';
    $pwd2 = $_POST['pwd'] ?? '';

    if(USER1 !== $user2) {
        // caso o usuario esteja errado encaminhar para login_error.html
        header('Location: login_erro.html');
        exit();
    } else if(USER1 === $user2 && PWD1 !== $pwd2) {
        // caso o usuario esteja certo e a senha errado encaminhar para login_error.html
        header('Location: login_erro.html');
        exit();
    } else {
        echo 'bem vindo usuário';
    }
?>
