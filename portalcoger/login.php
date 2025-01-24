<?php
// Inicializando a sessão para armazenar dados do usuário após login
session_start();

// Se o formulário for enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Captura o usuário e a senha
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Usuário e senha definidos para teste (em um ambiente real, você deve verificar em um banco de dados)
    $valid_username = "admin";
    $valid_password = "123456";

    // Validação do login
    if ($username == $valid_username && $password == $valid_password) {
        // Login bem-sucedido, armazena o nome de usuário na sessão
        $_SESSION['username'] = $username;
        header(header: "Location: menuinicial.php"); // Redireciona para uma página de dashboard (por exemplo)
        exit();
    } else {
        // Senha incorreta
        $error_message = "Usuário ou senha inválidos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <!-- Exibindo mensagem de erro, se houver -->
        <?php if (isset($error_message)): ?>
            <p class="error-message"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <div class="input-group">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="username" placeholder="Digite seu usuário" required>
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Digite sua senha" required>
            </div>
            <button type="submit" class="btn">Entrar</button>
            <div class="footer">
                <a href="#">Esqueceu a senha?</a>
            </div>
        </form>
    </div>
</body>
</html>
