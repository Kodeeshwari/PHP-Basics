<?php

echo <<<_END

<!DOCTYPE html>

<html>

<head>

<title>find the given number multiple of which number</title>

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

<h1>Give a number I will tell you the given number is multiple of 2 | 3 | or both | or not </h1>
<hr>
<!--Form-->

<form id="form1" method="post" action="practical1.php" > <!--Beginning form tag-->

<!--Form fields to input data-->

<label for="inputnum">Enter the number</label>

<br />

<input id="inputnum" type="text" name="inum" placeholder="positive number" required="required">

<br />


<!--Submit button to send form data-->

<input id="submitbutton1" type="submit" name="send" value="Check" />

</form> <!--Closing form tag-->

</body>

</html>

_END;

//Form Handling

//Go below only after a user pressed the input button name="send"

if (isset($_POST['send'])) {


$inputNum = $_POST["inum"];

if($inputNum%2==0 && $inputNum%3==0){
    echo"<h2 class=\"display-name\">The number : <span class=\"red-font\">$inputNum</span>  is multiple of <span class=\"red-font\">2 and 3</span>.</h2>";
}
else if($inputNum%2==0){
    echo"<h2 class=\"display-name\">The number : <span class=\"red-font\">$inputNum</span>  is multiple of <span class=\"red-font\">2</span>.</h2>";
}
else if($inputNum%3==0)
{
    echo"<h2 class=\"display-name\">The number : <span class=\"red-font\">$inputNum</span>  is multiple of <span class=\"red-font\">3</span>.</h2>";
}
else{
    echo"<h2 class=\"display-name\">The number : <span class=\"red-font\">$inputNum</span>  is neither multiple of <span class=\"red-font\">2 nor 3</span>.</h2>";

}
}

echo <<<_END

</body>

</html>

_END;

?>