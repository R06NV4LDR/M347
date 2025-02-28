<?php
$servername = "db";  // Dieser Name entspricht dem Alias, der beim Linken verwendet wird.
$username = "root";
$password = "rootpassword";
$database = "kn02b";

// Verbindung herstellen
$conn = new mysqli($servername, $username, $password, $database);

// Verbindung überprüfen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to the database";
?>
