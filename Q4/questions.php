
<?php
    if(isset($_POST['submit'])){
        if(!empty($_POST['questions'])) {
            $selected = $_POST['questions'];
            switch ($selected) {
                case 'name':
                    nameChoose();
                    break;
                case 'hobby':
                    hobbyChoose();
                    break;
                case 'club':
                    clubChoose();
                    break;
                default:
                break;
            }
        } elseif (empty($_POST['questions']) && empty($_POST['name']) && empty($_POST['hobby']) && empty($_POST['club'])) {
            header("Location: index.php");
        }        

        if (!empty($_POST['name'])) {
            echo "Your name is: ".$_POST['name']."<br>";
            echo "<a href='index.php'>Return</a>";
        } 
        if (!empty($_POST['hobby'])) {
            echo "Your hobby is: ".$_POST['hobby']."<br>";
            echo "<a href='index.php'>Return</a>";
        } 
        if (!empty($_POST['club'])) {
            echo "Your favourite club is: ".$_POST['club']."<br>";
            echo "<a href='index.php'>Return</a>";
        }
    }

    function nameChoose () {
        echo "<form action='' method='post'>";
        echo "<label for='name'>Name:</label><br>";
        echo "<input type='text' id='name' name='name'>";
        echo "<input type='submit' name='submit' value='Submit'/><br>";
        echo "</form>";
    }

    function hobbyChoose () {
        echo "<form action='' method='post'>";
        echo "<label for='hobby'>Hobby:</label><br>";
        echo "<input type='text' id='hobby' name='hobby'>";
        echo "<input type='submit' name='submit' value='Submit'/><br>";
        echo "</form>";
    }

    function clubChoose () {
        echo "<form action='' method='post'>";
        echo "<label for='club'>Club:</label><br>";
        echo "<input type='text' id='club' name='club'>";
        echo "<input type='submit' name='submit' value='Submit'/><br>";
        echo "</form>";
    }

    function displayOutput ($output) {
        echo $output;
    }
?>
