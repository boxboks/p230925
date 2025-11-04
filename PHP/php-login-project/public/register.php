<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/../src/Auth.php';
require_once __DIR__ . '/../src/Controllers/AuthController.php';

if (!class_exists('\App\Controllers\AuthController')) {
    die('Błąd: klasa \App\Controllers\AuthController nie została znaleziona.');
}

$authController = new \App\Controllers\AuthController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $authController->register();
    // register() przekieruje w razie potrzeby
}

// Jeśli metoda showRegisterForm ma być użyta, można ją wywołać, ale
// tutaj po prostu dołączymy szablon (kontroler też ma metodę do tego)
include __DIR__ . '/../templates/register.php';

?>
