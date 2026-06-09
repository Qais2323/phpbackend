<?php

$host = getenv("MYSQLHOST");
$dbname = getenv("MYSQLDATABASE");
$user = getenv("MYSQLUSER");
$pass = getenv("MYSQLPASSWORD");

try {
    $conn = new PDO(
        "mysql:host=$host;dbname=$dbname",
        $user,
        $pass
    );

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected";

} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
