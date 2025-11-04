<?php

namespace App\Controllers;

// Załaduj klasę Auth (ścieżka względna)
require_once __DIR__ . '/../Auth.php'; // upewnij się, że klasa Auth zostanie załadowana

class AuthController
{
    protected $auth;

    public function __construct()
    {
        // jeśli klasa Auth nie ma namespace, odwołujemy się do niej z globalnej przestrzeni nazw
        $this->auth = new \Auth();
    }

    public function showLoginForm()
    {
        include __DIR__ . '/../templates/login.php';
    }

    public function showRegisterForm()
    {
        include __DIR__ . '/../templates/register.php';
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($this->auth->login($username, $password)) {
                header('Location: ../../index.php');
                exit;
            } else {
                // ustaw komunikat błędu w sesji i przekieruj z powrotem
                $_SESSION['error'] = 'Nieprawidłowe dane logowania.';
                header('Location: login.php');
                exit;
            }
        }
    }

    public function logout()
    {
        $this->auth->logout();
        header('Location: login.php');
        exit;
    }

    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = trim($_POST['username'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';
            $confirm = $_POST['confirm'] ?? '';

            if ($password !== $confirm) {
                $_SESSION['error'] = 'Hasła nie są zgodne.';
                header('Location: register.php');
                exit;
            }

            $result = $this->auth->createUser($username, $password, $email);
            if ($result === true) {
                $_SESSION['success'] = 'Rejestracja zakończona powodzeniem. Możesz się zalogować.';
                header('Location: login.php');
                exit;
            } else {
                // $result zawiera komunikat o błędzie
                $_SESSION['error'] = $result;
                header('Location: register.php');
                exit;
            }
        }
    }
}