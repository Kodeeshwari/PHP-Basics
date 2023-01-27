<?php

echo <<<_END

<!DOCTYPE html>

<html>

<head>

<title>negative and analysing shape</title>

<style>
h1{color:blue;}
.form{color:blue;}

.formhandling{color:red;}

.display-name{color:green;}

.red-font{
    color:red;
}

</style>

</head>

<body>

<h1>Enter two number I will tell you whether at least 1 of them or none of them is negative</h1>

<hr>


<!--Form-->

<form id="form1" method="post" action="ex4_1.php" > <!--Beginning form tag-->

<!--Form fields to input data-->

<label for="inputnum1">Enter number 1</label>

<br />

<input id="inputnum1" type="text" name="num1" placeholder="enter number or digit">

<br />

<label for="inputnum2">Enter number 2</label>

<br />

<input id="inputnum2" type="text" name="num2" placeholder="enter number or digit">

<br />

<!--Submit button to send form data-->

<input id="submitbutton1" type="submit" name="send" value="Check" />

</form> <!--Closing form tag-->

</body>

</html>

_END;


if (isset($_POST['send'])) {

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
if ($num1 >= 0 && $num2 >= 0) {
    echo "<h2 class=\"display-name\">The given number $num1 and $num2 which is POSITIVE number</h2>";
} else if ($num1 < 0 || $num2 < 0) {
    print($num1 < 0) ? 
        "<h2 class=\"display-name\">The given numbers is $num1 and $num2 and your First number $num1 which is NEGATIVE</h2>" :
        "<h2 class=\"display-name\">The given numbers is $num1 and $num2 and your Second number $num2 which is NEGATIVE</h2>";
}
}

echo <<<_END

</body>

</html>

_END;

?>