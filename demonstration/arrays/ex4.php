<!DOCTYPE html>
<html>

<head>
    <title>Register user detail</title>
</head>


<body>
    <h1 style="color: blue;">How many inputs to display</h1>
    <form action="" method="post">
        <label for="numInput">How many people to register?</label><br />
        <input type="number" id="numInput" name="num" placeholder="positive number"><br />
        <input id="submit" type="submit" name="send" value="Submit" />
    </form>
    <?php
    if (isset($_POST['send'])) {
        $num = $_POST['num'];
        ?>
        <h2 style="color: red;">Registration Form</h2>
        <hr />
        <form action="registerList.php" method="post" id="registerForm">
                <input type="hidden" value="<?php echo $num;?>" name="num">
        <?php
        
        for ($i = 0; $i < $num; $i++) {
            ?>
          
                <h4>Register Person Number
                    <?php echo $i + 1 ?>
                </h4>
                <table border="1">
                    <tr>
                        <td><label for="fname"> First Name</label></td>
                        <td><input type="text" id="fname" name="fName<?php echo $i;?>" value="">
                        </td>
                    </tr>
                    <tr>
                        <td><label for="lname"> Last Name</label></td>
                        <td><input type="text" id="lname" name="lName$i" value=""> </td>
                    </tr>
                    <tr>
                        <td><label for="phone"> Wired Phone</label></td>
                        <td><input type="text" id="phone" name="phoneNum$i" value=""> </td>
                    </tr>

                </table>

            <?php
        }
        ?>
            </form>

        <input id="submit" type="submit" name="register" value="Register" form="registerForm" />
        <!--<h6><a href="">Try again</a></h6>-->
   <?php
    }

    ?>
</body>

</html>