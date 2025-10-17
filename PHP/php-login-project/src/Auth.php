<?php

class Auth {
    private $users = [
        'admin' => 'password123', // Example user for demonstration
    ];

    public function login($username, $password) {
        if (isset($this->users[$username]) && $this->users[$username] === $password) {
            $_SESSION['user'] = $username;
            return true;
        }
        return false;
    }

    public function logout() {
        unset($_SESSION['user']);
    }

    public function isAuthenticated() {
        return isset($_SESSION['user']);
    }
}