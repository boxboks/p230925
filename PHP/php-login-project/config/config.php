<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'pro8l3m');
define('DB_USER', 'root');
define('DB_PASS', '');

if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
define('SESSION_NAME', 'user_session');
define('SESSION_TIMEOUT', 3600);

define('BASE_URL', 'http://localhost/php-login-project/public');
?>