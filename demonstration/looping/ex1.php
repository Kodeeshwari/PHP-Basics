<?php

echo <<<_END

<!DOCTYPE html>

<html>

<head>

<title>multiplication table</title>

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

<h1>Give the number I will show you the multiplication table of first 10 </h1>

<hr>


<!--Form-->

<form id="form1" method="post" action="ex1.php" > <!--Beginning form tag-->

<!--Form fields to input data-->

<label for="inputnum">Enter number</label>

<br />

<input id="inputnum" type="text" name="num1" placeholder="enter number">

<br />

<!--Submit button to send form data-->

<input id="submitbutton1" type="submit" name="send" value="Calculate" />

</form> <!--Closing form tag-->

</body>

</html>

_END;


if (isset($_POST['send'])) {

$num = $_POST["num1"];
$count = 1;

//using while loop

while ($count < 10){

    //Code to repeat while the condition is true
    
    //echo "$num x $count = " . $count * $num . "<br>";
    echo "<h2 class=\"display-name\"> $num x $count = " . $count * $num . "</h2>";
    
    //Increase the value of the counter to stop it after a number of iterations
    
    ++$count;
    
    }

//using do while

do{
    echo "<h2 class=\"display-name\"> $num x $count = " . $count * $num . "</h2>";
    ++$count;
}while($count < 10);

}
echo <<<_END

</body>

</html>

_END;

?>