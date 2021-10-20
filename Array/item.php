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

        function kevin ($individual,$items) {
            $strKevin = $individual. ' bought ' .$items[rand(0,count($items)-1)]. '<br><br>';
            display($strKevin);
        }

        function arwin ($individual,$items) {

            $itemsBought = [];
            for ($i=0; $i<=2; $i++) {
                $rand_index = rand(0,count($items)-1);
                $itemsBought[$i]=$items[$rand_index];
                array_splice($items,$rand_index,1);
            }
    
            $strArwin1 = $individual. ' bought ' .$itemsBought[0]. ', '.$itemsBought[1].' and '.$itemsBought[2].'<br>';

            display($strArwin1);

            for ($i=0; $i<=2; $i++) {
                $rand_index = rand(0,count($items)-1);
                $itemsBought[$i]=$items[$rand_index];
                array_splice($items,$rand_index,1);
            }
    
            $strArwin2 = $individual. ' has now bought ' .$itemsBought[0]. ', '.$itemsBought[1].' and '.$itemsBought[2];
            display($strArwin2);
        }
    
    
    ?>
</body>
</html>