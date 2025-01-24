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

// Definindo dados para os cartões
$cards = [
    [
        'title' => 'BI MIDP',
        'copy' => 'Análise abrangente dos casos de mortes decorrentes de intervenções policiais.',
        'button' => 'ANALISAR BI',
        'link' => 'https://app.powerbi.com/view?r=eyJrIjoiZGU0NjhhOWQtNDNmYi00Y2QwLWE1NDUtN2NjMjUzYjIwNzlmIiwidCI6IjRjZDgzNWY0LTU0NDAtNDA4Zi05M2EzLTk3NWZjMTdjMzg0YSIsImMiOjR9' // Link específico
    ],
    [
        'title' => 'BI CAC',
        'copy' => 'Plan your next beach trip with these fabulous destinations',
        'button' => 'ANALISAR BI',
        'link' => 'https://app.powerbi.com/view?r=eyJrIjoiOTIwMTYwZTItYmZmOC00YjJjLTg0YzQtMzliNTVlZDY4ODI3IiwidCI6IjRjZDgzNWY0LTU0NDAtNDA4Zi05M2EzLTk3NWZjMTdjMzg0YSIsImMiOjR9' // Link específico
    ],
    [
        'title' => 'BI FORCE',
        'copy' => "It's the desert you've always dreamed of",
        'button' => 'ANALISAR BI',
        'link' => 'https://app.powerbi.com/view?r=eyJrIjoiNmY4ZWM3NmYtMWU4MS00NDg5LTlhYWQtMTczY2RiZTQ3NmYxIiwidCI6IjRjZDgzNWY0LTU0NDAtNDA4Zi05M2EzLTk3NWZjMTdjMzg0YSIsImMiOjR9' // Link específico
    ],
    [
        'title' => 'BI PUBLICO',
        'copy' => 'Seriously, straight up, just blast off into outer space today',
        'button' => 'ANALISAR BI',
        'link' => 'https://app.powerbi.com/view?r=eyJrIjoiNTg5MmQxNjctNDYzZi00ZWNmLWJmMzAtZWQ1ZTVhYTJjMjUwIiwidCI6IjRjZDgzNWY0LTU0NDAtNDA4Zi05M2EzLTk3NWZjMTdjMzg0YSIsImMiOjR9' // Link específico
    ],
    [
        'title' => 'BI RELATORIO PUBLICO',
        'copy' => 'Seriously, straight up, just blast off into outer space today',
        'button' => 'ANALISAR BI',
        'link' => 'https://app.powerbi.com/view?r=eyJrIjoiM2ExMDEzMDUtZDBkOC00MGNmLTk4MTAtOTg2MWU3MzU3ZjgzIiwidCI6IjRjZDgzNWY0LTU0NDAtNDA4Zi05M2EzLTk3NWZjMTdjMzg0YSIsImMiOjR9' // Link específico
    ],
];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARDS</title>
    <!-- Link para o arquivo CSS externo -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> GALERIA DE BI </BI>
<main class="page-content">
    <?php foreach ($cards as $card): ?>
        <div class="card">
            <div class="content">
                <h2 class="title"><?= htmlspecialchars(string: $card['title']) ?></h2>
                <p class="copy"><?= htmlspecialchars(string: $card['copy']) ?></p>
                <a href="<?= htmlspecialchars(string: $card['link']) ?>" class="btn">
                    <?= htmlspecialchars(string: $card['button']) ?>
                </a>
            </div>
        </div>
    <?php endforeach; ?>
</main>
</body>
</html>

<?php
echo "<p><a href='logout.php'>Sair</a></p>";
?>