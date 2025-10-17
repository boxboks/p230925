<?php
session_start();

// Check if the user is authenticated
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

// Display the home page content
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Welcome to the Home Page</h1>
    <p>You are logged in as <?php echo htmlspecialchars($_SESSION['user']); ?>.</p>
    <a href="logout.php">Logout</a>
</body>
</html>