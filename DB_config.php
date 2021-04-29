<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "steamaca_example_esp_board";
$dbPassword = "2xp)0WHd&GTk";
$dbName     = "steamaca_example_esp_data";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

echo 'Connected successfully<br>';

?>
