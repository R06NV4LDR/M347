<?php
$servername = "m347-kn04a-db";  // oder "172.10.5.10" je nach Compose-Einstellung
$username = "admon";            // laut Environment in docker-compose
$password = "654321pw";
$dbname = "mydb";
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