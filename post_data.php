<?php
// Get the distance value from the GET request
$distance = $_GET["distance"];

// Create a new PDO object to connect to your database
$db = new PDO("mysql:host=localhost:3306;dbname=ioscout_smartfarming", "ioscout_figfarming", "0Kf3[)4{H!q3");

// Prepare a SQL statement to insert the distance value into your database
$stmt = $db->prepare("INSERT INTO distance_table (distance) VALUES (:distance)");

// Bind the distance value to the prepared statement
$stmt->bindParam(":distance", $distance);

// Execute the prepared statement
$stmt->execute();

// Close the database connection
$db = null;
?>

