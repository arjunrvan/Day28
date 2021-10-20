<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q4</title>
</head>
<body>
    <form action="questions.php" method="post">
        <select id="questions" name="questions">
            <option value="" disabled selected>Choose option</option>
            <option value="name">What's your name?</option>
            <option value="hobby">What's your hobby?</option>
            <option value="club">What's your favourite club?</option>
        </select>
        <input type="submit" name="submit" value="Choose options"/>
    </form>
</body>
</html>