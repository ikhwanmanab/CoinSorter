<?php
$username = "ioscout_coinsorter";
$password = "@Rs(r@_bSE+O";
$servername = "localhost";
$dbname = "ioscout_coinsorter";
$conn = new mysqli($servername, $username, $password, $dbname);

// Define the time period (in seconds)
$time_period = 24 * 60 * 60;

// Get the current timestamp and the timestamp for the start of the time period
$current_time = time();
$start_time = $current_time - $time_period;

// Initialize arrays to store the labels and data for each coin
$coin_labels = array();
$coin_data = array();

// Loop through each coin denomination and count the number of coins inserted during the time period
foreach ($coin_values as $coin => $value) {
  // Get the number of coins inserted during the time period
  $coin_count = 0;
  foreach ($coin_log as $coin_entry) {
    if ($coin_entry['coin'] == $coin && $coin_entry['timestamp'] >= $start_time) {
      $coin_count += 1;
    }
  }

  // If at least one coin was inserted during the time period, add it to the labels and data arrays
  if ($coin_count > 0) {
    $coin_labels[] = $coin . " cents";
    $coin_data[] = $coin_count;
  }
}
?>

<!-- Create canvas elements for each pie chart -->
<?php for ($i = 0; $i < count($coin_labels); $i++) { ?>
  <canvas id='piechart_<?php echo $i; ?>'></canvas>
<?php } ?>

<!-- Add JavaScript code to draw the pie charts using Chart.js library -->
<script>
<?php for ($i = 0; $i < count($coin_labels); $i++) { ?>
  var ctx_<?php echo $i; ?> = document.getElementById('piechart_<?php echo $i; ?>').getContext('2d');
  var myPieChart_<?php echo $i; ?> = new Chart(ctx_<?php echo $i; ?>, {
    type: 'pie',
    data: {
      labels: ['<?php echo $coin_labels[$i]; ?>', 'Other'],
      datasets: [{
        label: '<?php echo $coin_labels[$i]; ?>',
        data: [<?php echo $coin_data[$i]; ?>, <?php echo array_sum($coin_data) - $coin_data[$i]; ?>],
        backgroundColor: ['#FF6384', '#36A2EB']
      }]
    },
    options: {
      responsive: true,
      plugins: {
        legend: {
          display: false
        }
      }
    }
  });
<?php } ?>
</script>




