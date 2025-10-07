<?php
session_start();
$USER = 'admin';
$PASS = 'haslo123';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $u = $_POST['username'] ?? '';
    $p = $_POST['password'] ?? '';
    if ($u === $USER && $p === $PASS) {
        $_SESSION['loggedin'] = true;
        header('Location: ../html/index.html');
        exit;
    } else {
        $error = 'Błędny login lub hasło!';
    }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Panel logowania</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        .login-container { width:320px; margin:120px auto; background:rgba(0,0,0,0.7); padding:32px 24px; border-radius:12px; color:white; box-shadow:0 0 16px #0008; text-align:center;}
        .login-container input { width:90%; margin:10px 0; padding:8px; border-radius:6px; border:none; font-size:1em;}
        .login-container button { width:100%; margin-top:16px;}
        .login-error { color: #ff6b6b; margin-top: 10px; min-height: 24px;}
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Panel logowania</h2>
        <form method="POST" action="logowanie.php" autocomplete="off">
            <input type="text" name="username" placeholder="Login" required><br>
            <input type="password" name="password" placeholder="Hasło" required><br>
            <button type="submit">Zaloguj</button>
        </form>
        <div class="login-error"><?= htmlspecialchars($error) ?></div>
    </div>
</body>
</html>