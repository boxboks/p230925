<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<title>PRO8L3M</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<h1>Witaj w panelu!</h1>
<a href="logout.php">Wyloguj się</a>
</body>
</html>
