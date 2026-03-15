<?php
/**
 * Foodo Database Connection
 * Uses PDO for enhanced security and support for prepared statements.
 */

$host = 'localhost';
$db   = 'foodo_db';
$user = 'root'; // Change to your DB username
$pass = '';     // Change to your DB password
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    // In production, do not reveal the exact error message
    die("Connection failed: " . $e->getMessage());
}
?>