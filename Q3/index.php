<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q3</title>
</head>
<body>
    <?php
        $students = ['kevin','amir','azizi','amirul'];
        array_push($students,"arjun");
        echo implode(', ',$students);
    ?>
</body>
</html>