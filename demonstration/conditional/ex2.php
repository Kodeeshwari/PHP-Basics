<?php

echo <<<_END

<!DOCTYPE html>

<html>

<head>

<title>find difference</title>

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

<h1>Give the number I will find difference between numbers</h1>

<hr>


<!--Form-->

<form id="form1" method="post" action="ex2.php" > <!--Beginning form tag-->

<!--Form fields to input data-->

<label for="inputnum1">Enter number or digit</label>

<br />

<input id="inputnum1" type="text" name="num1" placeholder="enter number">

<br />

<label for="inputnum2">Enter Number 2</label> 
      <br />
      <input id="inputnum2" type="number2" name="num2" placeholder="Number 2"> 
      <br />

<!--Submit button to send form data-->

<input id="submitbutton1" type="submit" name="send" value="find difference" />

</form> <!--Closing form tag-->

</body>

</html>

_END;


if (isset($_POST['send'])) {

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"]; 
    $message ='<h2>Please enter two different numbers</h2>';
    if ($num1==$num2){
        echo $message."<br/>";
    }elseif ($num1 > $num2){
        $diff = $num1-$num2;
        echo"<h2>You entered $num1 and $num2. The gap between $num1 and $num2 is $diff.<br/></h2>";
    }elseif ($num1 < $num2){
        $diff = $num2-$num1;
        echo"<h2>You entered $num1 and $num2. The gap between $num1 and $num2 is $diff.<br/></h2>";
    }

}

echo <<<_END

</body>

</html>

_END;

?>