<?php

    $username="ioscout_coinsorter";
    $password="@Rs(r@_bSE+O";
    $servername="localhost";
    $dbname="ioscout_coinsorter";

date_default_timezone_set("Asia/Kuala_Lumpur");
$timestamp = time();

$api_key_value = "tPmAT5Ab3j7F9";

$api_key = $id = $five_cents = $ten_cents = $twenty_cents = $fifty_cents ="";

if ($_SERVER["REQUEST_METHOD"] == "GET") 
{
    $api_key = test_input($_GET["api_key"]);
    if($api_key == $api_key_value) 
    {
        $id = test_input($_GET["id"]);
        $five_cents = test_input($_GET["five_cents"]);
        $ten_cents = test_input($_GET["ten_cents"]);
        $twenty_cents = test_input($_GET["twenty_cents"]);
        $fifty_cents = test_input($_GET["fifty_cents"]);
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) 
        {
            die("Connection failed: " . $conn->connect_error);
        } 
        
        $sql = "INSERT INTO distance_table (id, five_cents, ten_cents, twenty_cents, fifty_cents, timestamp)
        VALUES ('" . $id . "','" . $five_cents . "','" . $ten_cents . "','" . $twenty_cents . "','" . $fifty_cents. "', '" .date('d/m/Y | H:i:s',$timestamp) . "' )";
        
        if ($conn->query($sql) === TRUE) 
        {
            echo "Insert at ".date('m/d/Y H:i:s',$timestamp);
            // echo "Insert at ".$timestamp;
        } 
        else 
        {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    
        $conn->close();
    }
    
    else 
    {
        echo "Wrong API Key provided.";
    }

}

else 
{
    echo "No data posted with HTTP POST.";
}

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}