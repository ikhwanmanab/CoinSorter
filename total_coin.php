<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Coin Sorter</title>
  <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 10px;
    }
  </style>
</head>
<body>
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

    // Query the database to get the total coin count and coins per day
    $sql = "SELECT * FROM distance_table WHERE timestamp";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // Calculate the total number of coins and value for each denomination
      $total_coins = 0;
      $total_value = 0;
      $coins_per_day = 0;
      $coin_values = array(
        "5" => 0,
        "10" => 0,
        "20" => 0,
        "50" => 0
      );
      while ($row = $result->fetch_assoc()) {
        $total_coins += $row["five_cents"] + $row["ten_cents"] + $row["twenty_cents"] + $row["fifty_cents"];
        $coin_values["5"] += $row["five_cents"] * 5;
        $coin_values["10"] += $row["ten_cents"] * 10;
        $coin_values["20"] += $row["twenty_cents"] * 20;
        $coin_values["50"] += $row["fifty_cents"] * 50;
      }
      $total_value = array_sum($coin_values) / 100;

      // Output the results in an HTML table
      echo "<h1>Coin Sorter</h1>";
      echo "<table>";
      echo "<tr><th>Coin Denomination</th><th>Total Count</th><th>Total Value</th></tr>";
      foreach ($coin_values as $denomination => $value) {
        echo "<tr>";
        echo "<td>" . $denomination . " cents</td>";
        echo "<td>" . $value / $denomination . "</td>";
        echo "<td>$" . number_format($value / 100, 2) . "</td>";
        echo "</tr>";
      }
      echo "<tr><td>Total number of coins inserted:</td><td>$total_coins</td><td></td></tr>";
      echo "<tr><td>Total value of coins inserted:</td><td></td><td>$" . number_format($total_value, 2) . "</td></tr>";
      echo "</table>";
    } else {
      echo "No data found";
    }

    $conn->close();
  ?>
</body>
</html>

