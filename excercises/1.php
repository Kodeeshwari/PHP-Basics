<?php
echo "<h1 style=\"color:blue\">In class excercises</h1>";
echo "<h2 style=\"color:red\"><u>Excercise 1</u></h2><br/>";
echo"Exercise Number 1";
echo "<br/>";

 /* 
    PHP scripts are mainly used for:  

    1-Server-side scripting 

    2-Command-line scripting 

    3-Writing desktop applications 

    */

echo "<p align=\"center\">Copyright You&Me, 2022</p>"; 

$month_income=10000; 

$month_income=$month_income*12; 

echo"Year Income : $month_income"; 
?>

<!DOCTYPE html > 

<html> 

    <head> 

    </head> 

    <body> 
        <?php
        //Assign value to variable 

        $message='Welcome'; 
        ?>

        <h1>My first word is: <?php echo $message; //Display $message?></h1> 
        
    </body> 

</html> 

<?php
    echo "<h2 style=\"color:red\"><u>Excercise 2</u></h2>";
    /*
    “This is my first php program 

    and my task is 

    to display the name of the  

    inventor of php” 
    */

    //First name of the inventor of php

    $firstname = "Rasmus";
    //Last name of the inventor of php
    $lastname = "Lerdorf";
    
    echo "$lastname $firstname is the inventor of the programming language PHP";

    echo "<h2 style=\"color:red\"><u>Excercise 3</u></h2>";
    
    echo '$b="PHP7" <br/>';
    $b="PHP7";
    echo gettype($b)."<br/>";

    $a[]=&$b; //referrence of variable b stores in array 
    echo $a[0]. "is a" . gettype($a)."<br/>";

    $c="7th version of PHP"; 
    echo gettype($c)."<br/>";

    $d=$c*22; //Warning: A non-numeric value encountered in C:\xampp\htdocs\php\excercises\1.php on line 76
    echo gettype($d)."<br/>";
    echo $d."<br/>";

    $b.=$c; 
    echo gettype($b)."<br/>";
    echo $b."<br/>";

    $c*=$d; //Warning: A non-numeric value encountered in C:\xampp\htdocs\php\excercises\1.php on line 82
    echo gettype($c)."<br/>";
    echo $c."<br/>";

    $a[0]="MySQL"; 
    echo gettype($a)."<br/>";
    echo $a[0]."<br/>";

?>