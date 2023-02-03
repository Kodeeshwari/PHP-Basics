<!DOCTYPE html>
<html>

<head>
    <title>Register user detail</title>
</head>

<body>
    <?php
    if (isset($_POST['register'])) {


        echo $num = $_POST['num'];
        for ($i = 0; $i < $num; $i++) {

            echo $reg['person'.$i]['fName'.$i] = $_POST['fName'.$i];

            //     $registration["Person $i"]["First Name"] = $_POST["fName$i"];
    
            //     $registration["Person $i"]["Last Name"] = $_POST["lName$i"];
    
            //     $registration["Person $i"]["Phone Number"] = $_POST["phoneN$i"];
    

            //     for ($i = 0; $i < $count; $i++) {
            //     $fname = $_POST['fName'];
            //     $lname = $_POST['lName'];
            //     $phone = $_POST['phoneNum'];
            // }
    

            ?>

            <!-- <table>
                        <tr>
                            <th colspan="2">Person Number
                                <?php echo $i + 1; ?>
                            </th>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td><?php echo $fname; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><?php echo $lname; ?></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><?php echo $phone; ?> </td>
                        </tr>

                    </table>
             -->

            <?php
        }
    }
    ?>

</body>

</html>