<?php

echo <<<_END

<!DOCTYPE html>

<html>

<head>

<title>display number in ascending order</title>

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

<h1>Give a three different numbers I will display in ascending order </h1>
<hr>
<!--Form-->

<form id="form1" method="post" action="practical2.php" > <!--Beginning form tag-->

<!--Form fields to input data-->

<label for="inputnum1">Enter the number1</label>

<br />

<input id="inputnum1" type="text" name="num1" placeholder="positive number" required="required">

<br />
<label for="inputnum2">Enter the number2</label>

<br />

<input id="inputnum2" type="text" name="num2" placeholder="positive number" required="required">

<br />
<label for="inputnum3">Enter the number3</label>

<br />

<input id="inputnum3" type="text" name="num3" placeholder="positive number" required="required">

<br />


<!--Submit button to send form data-->

<input id="submitbutton1" type="submit" name="send" value="click for ascending order" />

</form> <!--Closing form tag-->

</body>

</html>

_END;

//Form Handling

//Go below only after a user pressed the input button name="send"

if (isset($_POST['send'])) {


$inputNum1 = $_POST["num1"];
$inputNum2 = $_POST["num2"];
$inputNum3 = $_POST["num3"];

if($inputNum1 == $inputNum2 || $inputNum1==$inputNum3 || $inputNum2==$inputNum3){
    echo"<h2 class=\"display-name\">One of the following number you entered : <span class=\"red-font\">$inputNum1, $inputNum2 and $inputNum3</span>  is same. <span class=\"red-font\">Please enter three different number</span>.</h2>";
}
else{
    $num_array = array($inputNum1,$inputNum2,$inputNum3);
    sort($num_array);
    echo '<pre>';
    echo"<h2 class=\"display-name\">Ascending order</h2>";
    $length = count($num_array);
    for($x = 0; $x < $length; $x++) {
        echo"<h2 class=\"display-name\">$num_array[$x]</h2>";
    }
}

}

echo <<<_END

</body>

</html>

_END;

?>