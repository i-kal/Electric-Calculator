<!DOCTYPE html>
<html>
<head>
  <title>Electricity Calculator</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include the CSS framework of your choice here -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <style>
    .small-text {
      font-size: 14px;
    }
    
    .thin-text {
      font-weight: lighter;
    }

    .custom-container {
      max-width: 500px;
      margin-left: auto;
      margin-right: auto;
    }

    .bold {
    font-weight: bold;
  }
  </style>
</head>
<body>
<div class="custom-container py-4">
  <h1>Electricity Calculator</h1>
  <form method="post">
    <div class="form-row align-items-center">
        <div class="col-7">
            <label for="voltage">Voltage</label>
            <input type="number" class="form-control" name="voltage" required>
            <p class="small-text">Voltage (V)</p>
        </div>
        <div class="col-7">
            <label for="current">Current</label>
            <input type="number" class="form-control" name="current" required>
            <p class="small-text">Ampere (A)</p>
        </div>
        <div class="col-7">
            <label for="rate">Current Rate</label>
            <input type="number" class="form-control" name="rate" required>
            <p class="small-text">sen/kWh</p>
        </div><br>
        <div class="col-7 text-center">
            <button type="submit" name="calculate" class="btn btn-primary">Calculate</button>
        </div>
    </div>
</form>
<br>
  <?php
  if(isset($_POST['calculate'])) {
    // Get user input
    $voltage = $_POST['voltage'];
    $current = $_POST['current'];
    $rate = $_POST['rate'];

    // Calculate power
    $power = $voltage * $current;

    // Calculate energy
    $energy = $power * 1 * 1000; // Assuming 1 hour

    // Calculate total charge
    $totalCharge = $energy * ($rate / 100);

    // Display results
    echo "<h2>Results:</h2>";
    echo "<p class='bold'>Power:</p> <p> " . $power . " Wh</p>";
    echo "<p class='bold'>Energy:</p> <p> " . $energy . " kWh</p>";
    echo "<p class='bold'>Total Charge:</p> <p> $" . $totalCharge . "</p>";
  }
  ?>
</body>
</html>
