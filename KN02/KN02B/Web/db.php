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

$sql = "select Host, User from mysql.user;";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    echo ("<li>" . $row["Host"] . " / " . $row["User"] . "</li>");
}
 
?>
