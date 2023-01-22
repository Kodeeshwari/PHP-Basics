<?php
    echo "Hello Montreal";
    echo "<br/>";
    $subtotal = 9.20;
    $total=$subtotal+($subtotal* 0.05)+($subtotal* 0.09975); 
    echo "Due : ". $total . "$"; 
    echo "<br/>";

    $var_bool = false;
    $var_str = "lorem ipsum";
    $var_int = 100; 
    echo gettype($var_bool)."<br/>";
    var_dump($var_bool);

    if(is_int($var_int)){
        echo "$var_int is an integer <br/>";
    }

    //define("pie",3.14);

    // Constant TPS and TVQ 

    define("TPS",0.05); 

    define("TVQ",0.09975); 
 $unit_price=2.5; 
 $quantity=40; 
 $subtotal=$unit_price*$quantity; 
 $total=$subtotal+($subtotal*TPS)+($subtotal*TVQ); 
echo "Due : ". $total . "$"; 
echo "<br/>"; 

//Escaping characters 

$escapin1 = 'PHP\'s syntax is very easy to learn'; 
$escapin2 = "PHP said : \"I'm the best programming language\"."; 
echo $escapin1."<br/>".$escapin2."<br/>"; 
?>

<html>
    <head>
        <title>php html</title>
    </head>
    <body>
        <?php 
            echo "php embedded in html"
        ?>
</body>
    </html>

    <?php
    $num=1;
      echo "<ul>";  

      echo "<li><a href=\"#\">List Item $num</a></li>\n";  
      
     echo "<li><a href=\"#\">List Item 2</a></li>\n";  
      
      echo "<li><a href=\"#\">List Item 3</a></li>\n";  
      
       echo "<li><a href=\"#\">List Item 4</a></li>\n";  
      
        echo "</ul>";  
      
       
      
      echo "<br/>";

     
    ?>