<?php

// Simple Auth class that uses PDO to store users in a database.
// It will attempt to read DB_* constants from config/config.php.

// Try to include config if DB constants are not defined
if (!defined('DB_HOST')) {
    $configPath = __DIR__ . '/../config/config.php';
    if (file_exists($configPath)) {
        require_once $configPath;
    }
}

class Auth
{
    /** @var \PDO|null */
    private $pdo = null;

    public function __construct()
    {
        // Start session if not started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        // Try to create PDO connection if DB constants are available
        if (defined('DB_HOST') && defined('DB_NAME') && defined('DB_USER') && defined('DB_PASS')) {
            try {
                $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4';
                $this->pdo = new PDO($dsn, DB_USER, DB_PASS, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]);

                // Ensure users table exists
                $this->createUsersTableIfNotExists();
            } catch (PDOException $e) {
                // On failure keep $this->pdo null and fall back to in-memory demo user
                error_log('Auth PDO connection failed: ' . $e->getMessage());
                $this->pdo = null;
            }
        }
    }

    private function createUsersTableIfNotExists()
    {
        if (!$this->pdo) {
            return;
        }

        $sql = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            username VARCHAR(100) NOT NULL UNIQUE,
            email VARCHAR(255) DEFAULT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";

        $this->pdo->exec($sql);
    }

    /**
     * Log in a user by username (or email) and password.
     * Returns true on success, false on failure.
     */
    public function login($username, $password)
    {
        // If we have a DB, check users table
        if ($this->pdo) {
            $sql = 'SELECT * FROM users WHERE username = :u OR email = :u LIMIT 1';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':u' => $username]);
            $user = $stmt->fetch();

            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user['username'];
                $_SESSION['user_id'] = $user['id'];
                return true;
            }
            return false;
        }

        // Fallback: demo in-memory user (for projects without DB configured)
        $demoUsers = ['admin' => 'password123'];
        if (isset($demoUsers[$username]) && $demoUsers[$username] === $password) {
            $_SESSION['user'] = $username;
            return true;
        }
        return false;
    }

    /**
     * Create a new user. Returns true on success or a string error message on failure.
     */
    public function createUser($username, $password, $email = null)
    {
        if (empty($username) || empty($password)) {
            return 'Nazwa użytkownika i hasło są wymagane.';
        }

        if ($this->pdo) {
            // Check if username or email already exists
            $sql = 'SELECT id FROM users WHERE username = :username OR email = :email LIMIT 1';
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute([':username' => $username, ':email' => $email]);
            $existing = $stmt->fetch();
            if ($existing) {
                return 'Użytkownik o takiej nazwie lub email już istnieje.';
            }

            $hashed = password_hash($password, PASSWORD_DEFAULT);
            $insert = 'INSERT INTO users (username, email, password) VALUES (:username, :email, :password)';
            $stmt = $this->pdo->prepare($insert);
            try {
                $stmt->execute([':username' => $username, ':email' => $email, ':password' => $hashed]);
                return true;
            } catch (PDOException $e) {
                error_log('createUser error: ' . $e->getMessage());
                return 'Wystąpił błąd podczas tworzenia użytkownika.';
            }
        }

        return 'Brak połączenia z bazą danych. Skonfiguruj DB w config/config.php.';
    }

    public function logout()
    {
        unset($_SESSION['user']);
        unset($_SESSION['user_id']);
    }

    public function isAuthenticated()
    {
        return isset($_SESSION['user']);
    }
}
