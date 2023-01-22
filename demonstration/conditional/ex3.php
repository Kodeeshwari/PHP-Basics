<?php

echo <<<_END

<!DOCTYPE html>

<html>

<head>

<title>find day</title>

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

<h1>Give the day name I will find you which day of the week is this</h1>

<hr>


<!--Form-->

<form id="form1" method="post" action="ex3.php" > <!--Beginning form tag-->

<!--Form fields to input data-->

<label for="inputday">Enter Day</label> 
      <br />
      <input id="inputday" type="text" name="day" placeholder="Day" required="required"> 
      <br />

<!--Submit button to send form data-->

<input id="submitbutton1" type="submit" name="send" value="find day" />

</form> <!--Closing form tag-->

</body>

</html>

_END;


if (isset($_POST['send'])) {

    $day = $_POST["day"];
    switch ($day){
    	case 'Monday' :
        	echo "You entered Monday. It’s the First day of the week.<br />";
        	break;
    	case 'Tuesday':
        	echo "You entered Tuesday. It’s the Second day of the week.<br />";
        	break;
    	case 'Wednesday':
        	echo "You entered Wednesday. It’s the Third day of the week.<br />";
        	break;
        case 'Thursday':
            echo "You entered Thursday. It’s the fourth day of the week.<br />";
            break;
        case 'Friday':
            echo "You entered Friday. It’s the fifth day of the week.<br />";
            break;
        case 'Saturday':
            echo "You entered Saturday. It’s the Sixth day of the week.<br />";
            break;
        case 'Sunday':
            echo "You entered Sunday. It’s Sunday!!!k.<br />";
            break;

    	default:
        	echo "Please enter correct Day.<br />";
	}

}

echo <<<_END

</body>

</html>

_END;

?>