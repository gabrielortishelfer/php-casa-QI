<?php
// Inicia a sessão para permitir o uso de variáveis de sessão (Deve ser iniciado antes de tudo)
session_start();
?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação de usuários</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <!-- Formulário de login -->
        <form action="auth.php" method="post">
            <h3>YOURSTORE</h3>
            <label for="user_email">EMAIL </label>
            <input type="email" name="user_email" id="user_email" required>
            <label for="user_password">PASS </label>
            <input type="password" name="user_password" id="user_password" required minlength="8">
            <button type="submit">LOGIN</button>
        </form>
    </header>

    <?php
    // Exibe mensagem de erro de login, se existir
    if (!empty($_SESSION['msg_login_error'])) :
    ?>
        <p><?= $_SESSION['msg_login_error'] ?></p>
    <?php
    // Limpa a mensagem de erro da sessão após exibi-la
        unset($_SESSION['msg_login_error']);
    endif;
    ?>
</body>

</html>
