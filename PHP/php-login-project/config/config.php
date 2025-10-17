<?php
// Configuration settings for the PHP login project

// Database connection settings
define('DB_HOST', 'localhost');
define('DB_NAME', 'your_database_name');
define('DB_USER', 'your_database_user');
define('DB_PASS', 'your_database_password');

// Session settings
session_start();
define('SESSION_NAME', 'user_session');
define('SESSION_TIMEOUT', 3600); // 1 hour

// Other configurations
define('BASE_URL', 'http://yourdomain.com/php-login-project/public');
?>