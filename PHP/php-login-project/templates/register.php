<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="..\..\..\css\style.css">
</head>
<body>
    <div class="login_background"></div>
    <div class="login">
    <h2 style="color:white;">Rejestracja</h2>
    <?php
    $error = $_SESSION['error'] ?? null;
    $success = $_SESSION['success'] ?? null;
    unset($_SESSION['error'], $_SESSION['success']);
    if ($error) {
        echo '<p style="color:red;">' . htmlspecialchars($error) . '</p>';
    }
    if ($success) {
        echo '<p style="color:lightgreen;">' . htmlspecialchars($success) . '</p>';
    }
    ?>
    <form action="register.php" method="POST">
        <div style="margin-bottom: 10px;">
            <label for="username" style="color:white;">Nazwa użytkownika:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label for="password" style="color:white;">Hasło:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div style="margin-bottom: 10px;">
            <label for="confirm" style="color:white;">Powtórz hasło:</label>
            <input type="password" id="confirm" name="confirm" required>
        </div>
        <div>
            <button type="submit" id="register_button">Zarejestruj</button>
        </div>
    </form>
    <p style="margin-top:10px;"><a href="login.php" style="color: lightblue;">Masz już konto? Zaloguj się</a></p>
    </div>
</body>
</html>
