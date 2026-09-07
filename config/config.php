<?php

session_start();

require_once(__DIR__ . '/../includes/activity-logger.php');

define('BASE_URL', 'http://localhost/it34b');

define('DB_HOST', 'localhost');
define('DB_NAME', 'libr_it34b');
define('DB_USER', 'root');
define('DB_PASS', '');

try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>
