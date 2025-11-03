<?php

namespace App\Controllers;
// echo var_dump(__DIR__);
require_once __DIR__ . '\..\Auth.php'; // upewnij się, że klasa Auth zostanie załadowana

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
        include __DIR__ . '\..\templates\login.php';
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
                echo "Invalid credentials.";
            }
        }
    }

    public function logout()
    {
        $this->auth->logout();
        header('Location: \login.php');
        exit;
    }
}