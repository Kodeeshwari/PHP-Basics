<!DOCTYPE html>

<html>

<head>

<style>

td {

border: solid 1px #000000;

}

</style>

</head>

<body>

<h1>3 Primary Colors RGB</h1>

<table>

<tr>

<td><h2>Red</h2></td>

<td style="width:63px; background-color:#ff0000;"></td>

</tr>

<tr>

<td><h2><?php echo "Blue" ?></h2></td>

<td style="width:63px; background-color:#0000ff;color:#ffffff"><h2><?php echo "#0000ff" ?></h2></td>

</tr>

<tr>


<?php echo "<td><h2>Green</h2></td>";

echo "<td style=\"width:63px; background-color:#008000;\"></td>";
?>
</tr>

</table>

</body>

</html>

<?php
echo <<<_END

<h1>3 Primary Colors RGB</h1>
<table>
<tr>

<td><h2>Red</h2></td>
<td style="width:63px; background-color:#ff0000;"></td>
</tr>
<tr>
 
<td><h2>Blue</h2></td>
<td style="width:63px; background-color:#0000ff;"></td>
</tr>

<tr>
<td><h2>Green</h2></td>
<td style="width:63px; background-color:#008000;"></td>
</tr>
</table>

_END;
?>