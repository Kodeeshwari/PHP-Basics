<!DOCTYPE html>
<html>

<head>
    <title>Search fruit by name and number</title>
</head>


<body>
    <h1>Search fruit name in our database</h1>
    <form action="" method="post" id="test">
        <input type="radio" id="searchByNum" name="searchType" value="Number">
        <label for="searchByNum">Number</label><br>
        <input type="radio" id="searchByText" name="searchType" value="Text">
        <label for="searchByText">Text</label><br />
        <input id="submit" type="submit" name="send" value="Submit" form="test" />
    </form>

    <?php

    echo "<br />What is your Keyword <br />";
    if (isset($_POST['send'])) {
        $selected = $_POST['searchType'];
        if ($selected == "Number") {
            ?>
            <form action="result.php" method="post" id="numForm">
                <label for="inputNum">Enter Number</label>
                <br />
                <input type="hidden" value="number" name="option">
                <input id="inputNum" type="text" name="num" placeholder="number between 1 to 9" required="required">
                <input id="submit" type="submit" name="numsend" value="Submit" form="numForm" />
            </form>

            <?php

        } else if ($selected == "Text") {
            ?>
                <form action="result.php" method="post">
                    <label for="inputText">Enter First letter of fruit name</label>
                    <br />
                    <input id="inputText" type="text" name="letter" placeholder="first letter of fruit name" required="required">
                    <input id="submit" type="submit" name="lettersend" value="Submit" />
                </form>

            <?php
        } else {
            echo "Please select one of the following option ";
        }
    }


    ?>


</body>

</html>