<?php
// Configuration for database connection
$host = 'localhost';  // Database host
$db = 'todo_app';     // Database name
$user = 'root';       // Database username
$pass = '';           // Database password (leave empty if no password)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8mb4", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error koneksi ke database: " . $e->getMessage());
}
?>
