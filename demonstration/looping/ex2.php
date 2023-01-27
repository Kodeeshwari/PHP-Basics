<?php

echo <<<_END

<!DOCTYPE html>

<html>

<head>

<title>Character Sequence</title>

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

<h1>Give the Text I will show you the each letter </h1>

<hr>


<!--Form-->

<form id="form1" method="post" action="ex2.php" > <!--Beginning form tag-->

<!--Form fields to input data-->

<label for="inputText">Enter Text</label>

<br />

<input id="inputText" type="text" name="textStr" placeholder="">

<br />

<!--Submit button to send form data-->

<input id="submitbutton1" type="submit" name="send" value="Calculate" />

</form> <!--Closing form tag-->

</body>

</html>

_END;


if (isset($_POST['send'])) {

$str = $_POST["textStr"];
$length = strlen($str);
echo "<ul>";
    for ($index = 0; $index < $length; $index++) {
        echo "<li>".strtoupper($str[$index])."</li><br/>";
        
    }
echo "</ul>";
echo "<br>";
echo strtoupper((count_chars($str, 3)));
echo "<br>";
}
echo <<<_END

</body>

</html>

_END;

?>