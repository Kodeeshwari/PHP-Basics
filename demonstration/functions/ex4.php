<html>
<body>

<form action="" method="post">
Enter a positive number: <input type="text" name="number"><br><br>
<input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $number = $_POST["number"];

  function factorial($number) {
    if ($number == 0) {
      return 1;
    } else {
      return $number * factorial($number - 1);
    }
  }

  $result = factorial($number);

  echo "The factorial of $number is $result";
}
?>

</body>
</html>
