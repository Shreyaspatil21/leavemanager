<?php
$host = 'localhost';
$db   = 'leavemanager';
$user = 'root';
$pass = ''; // default WAMP MySQL password is empty

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
