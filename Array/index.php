<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $student = ['Fikri','Arwin','Zafri','Chee Hoe'];
        // $grades = ['A','B','C','D','E','F'];
        // $subject = ['English','Maths'];
        // $class = [$student,$grades,$subject];
        

        // echo $class[0][0].'<br>';
        // echo $class[2][0].'<br>';

        // for ($i=0; $i<count($class[1]); $i++) {
        //     echo $class[1][$i];
        // }

        include "item.php";
        include "display.php";

        $items = ['Books','Clothes','Drinks','Food','Soap','Bread','Milk','Eggs'];
        $itemsCopy=$items;

        $person = ['Kevin','Arwin'];
        $itemsBought=[];

        // echo $person[0]. ' bought ' .$items[rand(0,count($items)-1)]. '<br><br>';

        $strKevin;
        $strArwin1;
        $strArwin2;


        kevin($person[0],$items);

        arwin($person[1],$items);

        

        // for ($i=0; $i<=2; $i++) {
        //     $rand_index = rand(0,count($itemsCopy)-1);
        //     $itemsBought[$i]=$itemsCopy[$rand_index];
        //     array_splice($itemsCopy,$rand_index,1);
        // }

        // echo $person[1]. ' bought ' .$itemsBought[0]. ', '.$itemsBought[1].' and '.$itemsBought[2].'<br>';

        // for ($i=0; $i<=2; $i++) {
        //     $rand_index = rand(0,count($itemsCopy)-1);
        //     $itemsBought[$i]=$itemsCopy[$rand_index];
        //     array_splice($itemsCopy,$rand_index,1);
        // }

        // echo $person[1]. ' has now bought ' .$itemsBought[0]. ', '.$itemsBought[1].' and '.$itemsBought[2];


    ?>
</body>
</html>