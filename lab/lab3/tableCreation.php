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

<h1>Give Row and Column I will create table for you</h1>
<hr>
<!--Form-->

<form id="form1" method="post" action="tableCreation.php" > <!--Beginning form tag-->

<!--Form fields to input data-->

<label for="inputnum1">Enter the number of rows</label>

<br />

<input id="inputnum1" type="text" name="num1" placeholder="positive number" required="required">

<br/><br/>
<label for="inputnum2">Enter the number of columns</label>

<br/>

<input id="inputnum2" type="text" name="num2" placeholder="positive number" required="required">

<br/>
<br/>

<!--Submit button to send form data-->

<input id="submitbutton1" type="submit" name="send" value="submit" />

</form> <!--Closing form tag-->

</body>

</html>

_END;

//Form Handling

//Go below only after a user pressed the input button name="send"

if (isset($_POST['send'])) {


$inputNum1 = $_POST["num1"];
$inputNum2 = $_POST["num2"];

if($inputNum1 <2 || $inputNum2<2 ){
    echo"<h2 class=\"display-name\">One of the following number you entered : <span class=\"red-font\">$inputNum1, $inputNum2 </span>  is less than 2. <span class=\"red-font\">Please enter alteast 2  to create table for any column</span>.</h2>";
}
else{
    echo "<br/><table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= $inputNum1; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= $inputNum2; $col++) { 
		   echo "<td>$col.$row</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";
}

}

echo <<<_END

</body>

</html>

_END;

?>