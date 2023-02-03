<!DOCTYPE html>
<html>
<body>
  <form method="post">
    Month: <input type="text" name="month"><br>
    Day: <input type="text" name="day"><br>
    Year: <input type="text" name="year"><br>
    <input type="submit" name="submit" value="Submit">
  </form>
<?php

// function to set birthday and check its validity
function set_birthday($month, $day, $year) {
    return checkdate($month, $day, $year);
}

// function to get current date as timestamp
function get_current_date() {
    return array("timestamp" => strtotime("today"));
}

// function to check if birthday is earlier than current date
function get_birthday($month, $day, $year) {
    $now = get_current_date()['timestamp'];
    $birthday = strtotime("$month/$day/$year");
    if ($birthday >= $now) {
        return false;
    }
    return true;
}

// function to get user age in terms of years and months
function get_age($month, $day, $year) {
    $now = get_current_date()['timestamp'];
    $birthday = strtotime("$month/$day/$year");
    $ageInDays = floor(($now - $birthday) / 86400);
    $ageInYears = floor($ageInDays / 365);
    $ageInMonths = floor(($ageInDays - ($ageInYears * 365)) / 30);
    return array("years" => $ageInYears, "months" => $ageInMonths);
}

// function to display output
function display_output($month, $day, $year) {
    if (!set_birthday($month, $day, $year)) {
        echo "Invalid birthday.<br>";
        return;
    }
    if (!get_birthday($month, $day, $year)) {
        echo "Birthday must be earlier than current date.<br>";
        return;
    }
    $age = get_age($month, $day, $year);
    echo "Your age is " . $age['years'] . " years and " . $age['months'] . " months.<br>";
}

if (isset($_POST['submit'])) {
    $month = $_POST['month'];
    $day = $_POST['day'];
    $year = $_POST['year'];
    display_output($month, $day, $year);
}
?>
</body>
</html>
