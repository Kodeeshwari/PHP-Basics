<?php

echo <<<_END

<!DOCTYPE html>

<html>

<head>

<title>display total of your purchase</title>

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

<h1>Tell me about your purchase I will display your total due</h1>



<hr>


<!--Form-->

<form id="form1" method="post" action="index.php" > <!--Beginning form tag-->

<!--Form fields to input data-->

<label for="inputname">Enter the name of the item you bought</label>

<br />

<input id="inputname" type="text" name="iname" placeholder="your first name" required="required">

<br />

<label for="inputquantity">Enter the quantity bought of the item</label>

<br />

<input id="inputquantity" type="text" name="quantity" placeholder="your last name" required="required">

<br />

<label for="inputprice">Enter the unit price of item</label>

<br />

<input id="inputprice" type="text" name="price" placeholder="your last name" required="required">

<br />

<!--Submit button to send form data-->

<input id="submitbutton1" type="submit" name="send" value="SEND IT" />

</form> <!--Closing form tag-->

</body>

</html>

_END;

//Form Handling

//Go below only after a user pressed the input button name="send"

if (isset($_POST['send'])) {

//Assign to the php variable $firstname the data collected from the the input field form name="fname"

$itemname = $_POST["iname"];

//Assign to the php variable $firstname the data collected from the the input field form name="lname"

$quantity = $_POST["quantity"]; // index to find the values submitted in the input field form name="quantity"

$price = $_POST["price"];

$subtotal= $price*$quantity;
$total= $subtotal + ($subtotal*5/100) +($subtotal*9.975/100);
$finalTotal=round($total,2);
//Display the data saved in the php variables

echo"<h2 class=\"display-name\">You bought : <span class=\"red-font\">$quantity $itemname</span>  that cost <span class=\"red-font\">$price</span> CA$ each.</h2>";

echo"<h2 class=\"display-name\">The SUB-TOTAL due for your purchase is <span class=\"red-font\">$subtotal</span> CA$.</h2>";
echo"<h2 class=\"display-name\">The TOTAL due for your purchase is <span class=\"red-font\">$finalTotal</span> CA$.</h2>";
}

echo <<<_END

</body>

</html>

_END;

?>