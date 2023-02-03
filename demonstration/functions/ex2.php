<!DOCTYPE html>
<html>
<head>
<body>
<h1>Refrence table</h1>

<!-- HTML form -->
<form action="" method="post">
  Enter a set of digits or/and numbers separated by a comma between each 2: <input type="text" name="data"><br>
  <input type="submit" name="submit" value="Submit">
</form>
<br>


<?php

// function to validate the input data set
function getDataSet(&$data) {
  // split the input string into an array
  $data = explode(",", $data);
  // check if the input is a valid data set
  foreach ($data as $value) {
    if (!is_numeric($value)) {
      return "Invalid data set.";
    }
  }
  return true;
}

// function to calculate the size of the data set
function getSize($data) {
  return count($data);
}

// function to sort the data set in ascending order
function getAscending($data) {
  sort($data);
  return $data;
}

// function to sort the data set in descending order
function getDescending($data) {
  rsort($data);
  return $data;
}

// function to display the output
function display_output($data, $size, $ascending, $descending) {
  echo "Size of the data set: " . $size . "<br>";
  echo "Data set in ascending order: " . implode(", ", $ascending) . "<br>";
  echo "Data set in descending order: " . implode(", ", $descending) . "<br>";
}

// form submission handling
if (isset($_POST['submit'])) {
  $data = $_POST['data'];
  $validate = getDataSet($data);
  if ($validate !== true) {
    echo $validate;
  } else {
    $size = getSize($data);
    $ascending = getAscending($data);
    $descending = getDescending($data);
    display_output($data, $size, $ascending, $descending);
  }
}

?>
</body>
</html>

