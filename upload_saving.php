<?php
// Connect to the database
$username = "ioscout_coinsorter";
$password = "@Rs(r@_bSE+O";
$servername = "localhost";
$dbname = "ioscout_coinsorter";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// If the form is submitted, insert the saving amount into the database and redirect the user
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
  $saving_amount = $_POST['saving_amount'];
  $sql = "INSERT INTO saving (saving_amount) VALUES ('$saving_amount')";
  if ($conn->query($sql) === TRUE) {
    // Redirect the user to a different page
    header("Location: success.php");
    exit();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/x-icon" href="ajax/logosmart.jfif">
  <title>Targeted Saving</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }
    h1 {
      text-align: center;
      color: #555;
      margin-top: 50px;
    }
    form {
      max-width: 500px;
      margin: auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 10px #aaa;
    }
    label {
      display: block;
      margin-bottom: 10px;
      color: #666;
      font-size: 18px;
    }
    input[type="number"] {
      padding: 10px;
      border-radius: 5px;
      border: none;
      background-color: #f2f2f2;
      font-size: 18px;
      color: #555;
      width: 100%;
      box-sizing: border-box;
      margin-bottom: 20px;
    }
    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 18px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }
    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
    .notification {
      background-color: #4CAF50;
      color: #fff;
      text-align: center;
      padding: 10px;
      position: fixed;
      z-index: 1;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      border-radius: 5px;
      box-shadow: 0px 0px 10px #aaa;
      width: 80%;
      max-width: 500px;
    }
    
    		button {
			background-color: #4CAF50;
			color: #fff;
			border: none;
			padding: 10px 20px;
			font-size: 18px;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.3s ease;
		}

		button:hover {
			background-color: #3e8e41;
		}
  </style>
</head>
<body>
<div class="logo" class="card-container">  
<center><img width="400" height="300" style="center" src="ajax/logoduit.jfif"></center>
   </div>
    
<h1>Enter Targeted Saving Amount</h1>
<form method="post">
  <label for="saving_amount">Targeted Amount (RM):</label>
  <input type="number" name="saving_amount" id="saving_amount" placeholder="Enter value here..." required>
  <br>
  <input type="submit" name="submit" value="Save">
</form><br><br>
<center><button onclick="location.href='index.php'">Cancel</button></center>
  <script>
    function submitForm(event) {
      event.preventDefault(); // prevent the form from submitting
      document.querySelector('form').submit(); // submit the form
    }
  </script>

</body>
</html>
