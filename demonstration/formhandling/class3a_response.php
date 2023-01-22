<!DOCTYPE html>

<html>

<head>

<title>HTML Form and PHP Form Handling</title>

<style>

.form{color:blue;}

.formhandling{color:red;}

.display-name{color:green;}

</style>

</head>

<body>

<h1>HTML Form and PHP Form Handling</h1>

<h2>Display <span class="form">Form</span> first and <span class="formhandling">Form Handling</span> next in different pages</h2>

<hr>

<?php

//Form Handling

//Go below only after a user pressed the input button name="send"

if (isset($_POST['send'])) {

//Assign to the php variable $firstname the data collected from the the input field form name="fname"

$firstName = $_POST["fname"];

//Assign to the php variable $firstname the data collected from the the input field form name="lname"

$lastName = $_POST["lname"]; // index to find the values submitted in the input field form name="quantity"

//Display the data saved in the php variables

echo"<h2 class=\"display-name\">Your name is : $firstName $lastName.</h2>";

echo"<h2 class=\"display-name\">Congratulation, it is beautiful!</h2>";

}

?>

<a href="index.php">BACK TO THE FORM</a>

</body>

</html>