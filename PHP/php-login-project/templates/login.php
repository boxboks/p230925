<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="../public/login.php" method="POST">
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
    <p style="margin-top:10px;">
        <button type="button" onclick="window.location.href='../public/register.php'" style="background:#1e90ff;color:white;padding:8px 12px;border:none;border-radius:4px;cursor:pointer;">Zarejestruj się</button>
    </p>
</body>
</html>