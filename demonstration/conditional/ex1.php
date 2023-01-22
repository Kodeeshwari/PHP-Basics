<?php

echo <<<_END

<!DOCTYPE html>

<html>

<head>

<title>positive or negative</title>

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

<h1>Give the number I will tell you weather it is positive or negative</h1>

<hr>


<!--Form-->

<form id="form1" method="post" action="ex1.php" > <!--Beginning form tag-->

<!--Form fields to input data-->

<label for="inputnum">Enter number or digit</label>

<br />

<input id="inputnum" type="text" name="num1" placeholder="enter number or digit">

<br />

<!--Submit button to send form data-->

<input id="submitbutton1" type="submit" name="send" value="Check" />

</form> <!--Closing form tag-->

</body>

</html>

_END;


if (isset($_POST['send'])) {

$num = $_POST["num1"];

if($num>0){
    echo "<h2 class=\"display-name\">The Given Number $num is Positive</h2>";
}
elseif($num==0){
    echo "<h2 class=\"display-name\">The Given value $num is seems null</h2>";
}
else{
    echo "<h2 class=\"display-name\">The Given Number $num is Negative</h2>";
}

}

echo <<<_END

</body>

</html>

_END;

?>