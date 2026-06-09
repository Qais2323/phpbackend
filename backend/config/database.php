<?php

$host = "mysql.railway.internal";
$username = "root";
$password = "eZWkivAFgTERumAyvrPOqKXdwQOYPzbV";
$database = "blood_bank_db";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// optional
// echo "Database Connected";

?>
