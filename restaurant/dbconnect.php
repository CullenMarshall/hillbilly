<?php
// database connection function

$host = 'localhost';
$dbname = 'hillbilly_pizza';
$username = 'root';
$password = '';


// Connection to the database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo; // return the connection
} catch (Exception $e) {
    die('Error : ' . $e->getMessage());
}
