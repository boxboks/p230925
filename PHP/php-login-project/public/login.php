<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../src/Auth.php';
require_once __DIR__ . '/../src/Controllers/AuthController.php';

if (!class_exists('\App\Controllers\AuthController')) {
    die('Błąd: klasa \App\Controllers\AuthController nie została znaleziona. Sprawdź namespace i ścieżki w src/Controllers/AuthController.php');
}

// użyj pełnej, nazwanej klasy z namespace
$authController = new \App\Controllers\AuthController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // kontroler sam czyta $_POST, więc wywołaj bez argumentów
    $authController->login();
}

// Pobierz komunikaty z sesji (jeśli są)
$error = $_SESSION['error'] ?? null;
$success = $_SESSION['success'] ?? null;
unset($_SESSION['error'], $_SESSION['success']);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="..\..\..\css\style.css">
</head>
<body>
    <div class="login_background"></div>
    <div class="login">
    <h2 style="color:white;">Login</h2>
    <?php if ($error): ?>
        <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <?php if ($success): ?>
        <p style="color: lightgreen;"><?php echo htmlspecialchars($success); ?></p>
    <?php endif; ?>
    <form action="login.php" method="POST">
        <div style="margin-bottom: 10px;">
            <label for="username" style="color:white;">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label for="password" style="color:white;">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit" id="login_button">Login</button>
        </div>
    </form>
    <p style="margin-top:10px;">
        <button type="button" onclick="window.location.href='register.php'" style="background:#1e90ff;color:white;padding:8px 12px;border:none;border-radius:4px;cursor:pointer;">Zarejestruj się</button>
    </p>
    </div>
</body>
</html>