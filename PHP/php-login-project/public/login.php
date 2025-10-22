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
    // jeśli kontroler przekierowuje przy sukcesie, poniżej możesz
    // dopisać obsługę błędu, np. pobrać komunikat z sesji lub wyświetlić
    // statyczny komunikat — tutaj nic więcej nie trzeba robić
}
?>

<!DOCTYPE html>
<<<<<<< Updated upstream
<html lang="en">
=======
<html lang="pl">
>>>>>>> Stashed changes
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<<<<<<< Updated upstream
</head>
<body>
    <h2>Login</h2>
=======
    <link rel="stylesheet" href="..\..\..\css\style.css">
</head>
<body>
    <div class="login_background"></div>
    <div class="login">
    <h2 style="color:white;">Login</h2>
>>>>>>> Stashed changes
    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="login.php" method="POST">
<<<<<<< Updated upstream
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit">Login</button>
        </div>
    </form>
=======
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
    </div>
>>>>>>> Stashed changes
</body>
</html>