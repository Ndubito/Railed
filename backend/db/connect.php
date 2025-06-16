<?php
require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$host = getenv('DB_HOST');
$user = getenv('DB_USER');
$password = getenv('DB_PASSWORD');
$database = getenv('DB_NAME');

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully to the database.";
}

?>