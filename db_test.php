<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'mysql'; // existing system database

$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn) {
    echo "Database connection successful";
} else {
    echo "Database connection failed";
}
