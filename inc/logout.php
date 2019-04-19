<?php
    // inicia sessão do usuário
    session_start();
    // destrói a sessão do usuário
    session_destroy();
    // redireciona usuário para login.php
    header("Location: ../login.php");
?>
