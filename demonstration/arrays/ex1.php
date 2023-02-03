<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}

</style>

</head>
<body onload="myFunction()">

<h1>Order Form</h1>
<form action="ex1.php" method="post">
<table>
  <tr>
    <th colspan="2">Service List</th>
  </tr>
  <tr>
    <td><label for="service1"> Tv Cable</label></td>
    <td><input type="checkbox" id="service1" name="services[]" value="tvcable">       
    </td>
  </tr>
  <tr>
    <td><label for="service2"> Mobile Phone</label></td>
    <td><input type="checkbox" id="service2" name="services[]" value="Mobile Phone">       </td>
  </tr>
  <tr>
    <td><label for="service3"> Wired Phone</label></td>
    <td><input type="checkbox" id="service3" name="services[]" value="Wired Phone">       </td>
  </tr>
  <tr>
    <td><label for="service4"> Cable Internet</label></td>
    <td><input type="checkbox" id="service4" name="services[]" value="Cable Internet">       </td>
  </tr>
  <tr>
    <td><label for="service5"> Home Alarm</label></td>
    <td><input type="checkbox" id="service5" name="services[]" value="Home Alarm">       </td>
  </tr>
  <tr>
    <td><label for="service6"> Smart Home</label></td>
    <td><input type="checkbox" id="service6" name="services[]" value="Smart Home">       </td>
  </tr>
  <tr>
    <td colspan="2"><input id="submit" type="submit" name="send" value="Order Now" /></td>
  </tr>
  
</table>
</form>

</body>
</html>

<?php


if(isset($_POST['send'])){
    if(isset($_POST['services'])){
        echo "<h2>You selected the following services</h2>";

        $serviceArray = $_POST['services'];
    echo "<ol>";
    foreach($serviceArray as $item){
        echo "<li>$item</li>";
    }  
    echo "<br/>";
    echo "</ol>"; 
        
    }
    else{
        echo "<h2>You forget to selecte the services</h2>";
    }
    
     
} 
?>




