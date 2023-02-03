<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 8px;
  text-align: center;
}
</style>
</head>
<body>
  <h1>Calculation Tables</h1>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="number">Enter a number:</label>
    <input type="number" id="number" name="number">
    <input type="submit" name="submit" value="Submit">
  </form>
  <br>
  <?php
  if (isset($_POST['submit'])) {
    $number = $_POST['number'];

    getSum($number);
    getDifference($number);
    getProduct($number);
  }

  function getSum($n) {
    echo "<h3>Addition Tables</h3>";
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= 10; $j++) {
        $sum = $i + $j;
        echo "<td>" . $i . " + " . $j . " = " . $sum . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }

  function getDifference($n) {
    echo "<h3>Subtraction Tables</h3>";
    echo "<table>";
    for ($i = $n; $i >= 1; $i--) {
      echo "<tr>";
      for ($j = 1; $j <= 10; $j++) {
        $difference = $i - $j;
        echo "<td>" . $i . " - " . $j . " = " . $difference . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }

  function getProduct($n) {
    echo "<h3>Multiplication Tables</h3>";
    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= 10; $j++) {
        $product = $i * $j;
        echo "<td>" . $i . " x " . $j . " = " . $product . "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
  }
  ?>
</body>
</html>
