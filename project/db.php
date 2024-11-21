<?php
$host = 'localhost'; // Database host (localhost for local server)
$dbname = 'student_management'; // Name of your database
$username = 'root'; // MySQL username
$password = ''; // MySQL password (empty for XAMPP default)
$charset = 'utf8mb4';

// Set DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

// Try to establish a connection
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error mode to exception
} catch (PDOException $e) {
    die("Could not connect to the database $dbname :" . $e->getMessage());
}
?>