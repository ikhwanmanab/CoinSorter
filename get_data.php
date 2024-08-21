<?php
// Connect to the MySQL database
$username = "ioscout_coinsorter";
$password = "@Rs(r@_bSE+O";
$servername = "localhost";
$dbname = "ioscout_coinsorter";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query the database to get the latest coin data
$sql = "SELECT * FROM distance_table ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Convert the query result into a JSON object
    $row = $result->fetch_assoc();
    $data = array(
        "timestamp" => $row["timestamp"],
        "five_cents" => $row["five_cents"],
        "ten_cents" => $row["ten_cents"],
        "twenty_cents" => $row["twenty_cents"],
        "fifty_cents" => $row["fifty_cents"]
    );
    $json = json_encode($data);
    echo $json;
} else {
    echo "No data found";
}

$conn->close();
?>

