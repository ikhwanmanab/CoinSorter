<?php
    $username="ioscout_coinsorter";
    $password="@Rs(r@_bSE+O";
    $servername="localhost";
    $dbname="ioscout_coinsorter";
$conn = new mysqli($servername,$username,$password,$dbname);
$sql = "SELECT * FROM distance_table order by id desc limit 1";
$records = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($records);
echo json_encode($row);
?>
