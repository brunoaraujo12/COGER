<?php
// Inicia a sessão
session_start();

// Remove todos os dados da sessão
session_unset();

// Destrói a sessão
session_destroy();

// Redireciona para a tela de login
header(header: "Location: login.php");
exit();
?>
