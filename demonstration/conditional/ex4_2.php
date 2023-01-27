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

<form id="form1" method="post" action="ex4_2.php" > <!--Beginning form tag-->

<!--Form fields to input data-->

<label for="inputnum1">Enter side 1</label>

<br />

<input id="inputnum1" type="text" name="num1" placeholder="">

<br />

<label for="inputnum2">Enter side 2</label>

<br />

<input id="inputnum2" type="text" name="num2" placeholder="">

<br />

<label for="inputnum3">Enter side 3</label>

<br />

<input id="inputnum3" type="text" name="num3" placeholder="">

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
$num3 = $_POST["num3"];
if ($num1 == $num2 && $num2 == $num3) {
    echo "<h2 class=\"display-name\">The given numbers is $num1 and $num2 and $num3 which is EQUILATERAL triangle</h2>";
} elseif (($num1 != $num2 && $num2 != $num3 && $num1 != $num3)) {
    echo "<h2 class=\"display-name\">The given numbers is $num1 and $num2 and $num3 which is SCALENE triangle</h2>";
} else {
    echo "<h2 class=\"display-name\">The given numbers is $num1 and $num2 and $num3 which is ISOSCELES triangle</h2>";
}
}


echo <<<_END

</body>

</html>

_END;

?>