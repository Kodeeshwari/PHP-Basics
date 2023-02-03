<!DOCTYPE html>
<html>

<head>
    <title>Grade classification</title>
</head>


<body>
    <h1>Enter the set of numbers separated by comma to classify grade</h1>
    <form action="" method="post">
        
        <input type="text" name="search_value" placeholder="10,20,30">
        <input id="submit" type="submit" name="send" value="Submit" />
    </form>

    <?php
    if (isset($_POST['send'])) {
        $myTextField = $_POST['search_value'];
        $myArray = explode(',', $myTextField);
        $flag = false;
        foreach ($myArray as $value) {
            if ($value < 0 || $value > 100) {
                $flag = true;
            }
        }
        if ($flag) {
            echo "<h2>The value should be between 0 and 100</h2>";
        } else {
            $numOfStd = count($myArray);
            $sum = array_sum($myArray);
            $avg = $sum / $numOfStd;
            $min = min($myArray);
            $max = max($myArray);

            $count1 = $count2 = 0;
            for ($i = 0; $i < sizeof($myArray); $i++) {
                if ($myArray[$i] >= 60 && $myArray[$i] <= 100) {
                    $count1++;
                }
                if ($myArray[$i] >= 0 && $myArray[$i] < 60) {
                    $count2++;
                }
            }

            echo "<h2>The number between 0-60 = $count2</h2>";
            echo "<h2>The number between 60-100 =$count1</h2>";
            echo "<h2>The Average score is = $avg</h2>";
            echo "<h2>The Maximum score is =$max</h2>";
            echo "<h2>The minimum score is =$min</h2>";
        }

    }
    ?>
</body>

</html>