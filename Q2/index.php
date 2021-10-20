<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q2</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="ic">IC:</label><br>
        <input type="text" id="ic" name="ic"><br>
        <label for="mobile">Mobile Number:</label><br>
        <input type="text" id="mobile" name="mobile">
        <input type="submit" name="submit" value="Submit"/>
    </form>
    <?php

        if (!empty($_POST['name']) && !empty($_POST['ic']) && !empty($_POST['mobile'])) {
            displayInfo();
        }
        function getName () {
            return  $_POST['name'];
        }

        function getIC () {
            return  $_POST['ic'];
        }

        function getMobile () {
            return  $_POST['mobile'];
        }

        function displayInfo () {
            $name = getName();
            $ic = getIC();
            $mobile = getMobile();

            echo '<br>';
            echo "Name: ".$name. '<br>';
            echo "IC: ".$ic. '<br>';
            echo "Mobile Number: ".$mobile. '<br>';
        }
    ?>
</body>
</html>