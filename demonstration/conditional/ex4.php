<?php
if (!isset($_POST['send2']) && !isset($_POST['send'])) {


    echo <<<_END
<form id="form1" method="post" action="ex4.php" > <!--Beginning form tag-->
<span style= "text-align:center"><h2> Form 1</h2> </span>
  
<!--Form fields to input data-->

<label for="input_num1">Enter Number </label>

<br />

<input id="input_num1" type="number" name="num1" placeholder="Enter number" required="required">

<br />
<label for="input_num2"> <br />Enter Number </label>
    
    <br />
    
    <input id="input_num2" type="number" name="num2" placeholder="Enter number" required="required">
    
    <br />
    
<!--Submit button to send form data-->

<input id="submitbutton1" type="submit" name="send" value="SEND IT" />

</form> <!--Closing form tag-->

_END;

} else if (!isset($_POST['send2']) && isset($_POST['send'])) {

    echo '<span style = "text-align:center"><h2>Form 1</h2></span>';

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    if ($num1 > 0 && $num2 > 0) {
        echo "<span style = \"text-align:center\"><h3>you entered $num1 and $num2 which is POSITIVE number</h3></span>";
    } else if ($num1 <= 0 || $num2 <= 0) {
        print($num1 <= 0) ? 
            "<span style = \"text-align:center\"><h3>you entered $num1 and $num2 and your first number $num1 which is NEGATIVE number</h3></span>" :
            "<span style = \"text-align:center\"><h3>you entered $num1 and $num2 and your second number $num2 which is NEGATIVE number</h3></span>";
    }
    //    ($num > 0) ? "Positive Number" : "Negative Number";

    echo <<<_END
    <form id="form2" method="post" action="ex4.php" style = "text-align:center" > <!--Beginning form tag-->
    
    <!--Form fields to input data-->
    
    <span style= "text-align:center"><h2> Form 2</h2> </span>
    <label for="input_num1"> <br />Enter Number </label>
    
    <br />
    
    <input id="input_num1" type="number" name="side1" placeholder="Enter number" required="required">
    
    <br />
    
    <label for="input_num2">Enter Number </label>
    
    <br />
    
    <input id="input_num2" type="number" name="side2" placeholder="Enter number" required="required">
    
    <br />
    
    <label for="input_num3">Enter Number </label>
    
    <br />
    
    <input id="input_num3" type="number" name="side3" placeholder="Enter number" required="required">
    
    <br />
    
    <!--Submit button to send form data-->
    
    <input id="submitbutton2" type="submit" name="send2" value="SEND IT" />
    
    </form> <!--Closing form tag-->
    
    _END;

} elseif (isset($_POST['send2']) ) {
    //&& isset($_POST['send'])

    echo '<span style = "text-align:center"><h2>Form 2: Triangle</h2></span>';

    $num1 = $_POST["side1"];
    $num2 = $_POST["side2"];
    $num3 = $_POST["side3"];

    if ($num1 == $num2 && $num2 == $num3) {
        echo "<span style = \"text-align:center\"><h3>you entered $num1 and $num2 and $num3 which is EQUILATERAL triangle</h3></span>";
    } elseif (($num1 != $num2 && $num2 != $num3 && $num1 != $num3)) {
        echo "<span style = \"text-align:center\"><h3>you entered $num1 and $num2 and $num3 which is SCALENE triangle</h3></span>";
    } else {
        echo "<span style = \"text-align:center\"><h3>you entered $num1 and $num2 and $num3 which is ISOSCELES triangle</h3></span>";
    }
}