<?php
$host = 'localhost';
$user = 'your_db_username';
$pass = 'your_db_password';
$db = 'your_db_name';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
