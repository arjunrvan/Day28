<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Q1</title>
</head>
<body>
    <form action="" method="post">
        <select id="stars" name="stars">
            <option value="" disabled selected>Choose option</option>
            <option value="halfstars">Half Stars</option>
            <option value="fullstars">Full Stars</option>
        </select>
        <input type="submit" name="submit" value="Choose options"/>
    </form>
    

    <?php   
        if(isset($_POST['submit'])){
            if(!empty($_POST['stars'])) {
                $selected = $_POST['stars'];
                echo 'You have chosen: ' . $selected. '<br/><br/>';

                switch ($selected) {
                    case 'fullstars':
                        topStars();
                        bottomStars();
                        break;
                    case 'halfstars':
                        topStars();
                        break;
                    default:
                        break;
                }
            } else {
                echo 'Please select the value.';
            }
        }

        function topStars() {
            $num = 5;
            for ($i = 1; $i <= $num; $i++) {
                for ($j = 1; $j <= $i; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
        }

        function bottomStars() {
            $num = 5;
            for ($i = 1; $i <= $num; $i++) {
                for ($j = $num; $j >= $i; $j--) {
                    echo "*";
                }
                echo "<br>";
            }
        }
    ?>
</body>
</html>