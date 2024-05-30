<?php

// Database connection parameters
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "cadastro_arp";

// Create connection
$mysqli = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

echo "Connected successfully to MySQL database";

// Close connection (when no longer needed)
$mysqli->close();
?>
