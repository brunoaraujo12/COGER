<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['username'])) {
    // Caso não esteja logado, redireciona para a página de login
    header(header: "Location: login.php");
    exit();
}
// Exibe uma mensagem de boas-vindas
echo "<h1>Bem-vindo, " . $_SESSION['username'] . "!</h1>";

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link rel="stylesheet" href="menuinicial.css"> <!-- Link para o arquivo CSS -->
</head>
<body>
    <div class="container">
        <h1>Escolha uma das opções abaixo:</h1>
        <ul>
            <li><a href="dashboard.php">DASHBOARDS ANALÍTICOS</a></li>
            <li><a href="webinstragram.php">CARNAVAL 2025</a></li>
            <li><a href="relatorios.php">RELATÓRIOS</a></li>
        </ul>
    </div>
</body>
</html>