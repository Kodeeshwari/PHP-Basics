<?php
if (isset($_POST['numsend'])) {
$fruits = array("apple", "banana", "cherry", "date", "eggplant", "fig", "grape", "hackberry", "icacin");
    
    $num = $_POST['num'];
    
    if ($num >= 1 && $num <= 9) {
        echo "<h2> You typed $num <br/> The corresponding fruit name is ";
        print_r($fruits[$num - 1]);
        echo "</h2>";
    } else {
        echo "<h2>please ennter number between 1 to 9</h2>";
    }
    }
else if(isset($_POST['lettersend'])){
    $fruits = array("a"=>"apple","b"=> "banana", "c"=>"cherry", "d" => "date", "e" =>  "eggplant", "f" => "fig", "g"=>"grape", "h" =>"hackberry", "i" => "icacin");
    $letter = $_POST['letter'];
    //echo $letter;
    $found = false;
   
    foreach ($fruits as $k => $v) 
    {
      if($k==$letter){
        echo "<h2> You typed $letter <br/> The corresponding fruit name is $v</h2>";
        $found = true;
      }
    }
    if($found == false){
        echo "<h2>We don't have any fruit exist with this letter ' $letter ' in our database</h2>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Search fruit by name and number</title>
</head>


<body>
    <a href="ex2.php">go back to search</a>
</body>
</html>


