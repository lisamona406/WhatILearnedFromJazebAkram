<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strings</title>
</head>
<body>
    <?php
        echo "My name is Nadia <br>";
        echo 'my age is 22';

        echo "<br>";
        $color = "red";
        $shirt = "sleeve-less";
        $combination = $color." ".$shirt;
        echo $combination;

    ?>

    <hr>
    <?php 
        // In double quotation, it gives you the value of $color. 
        echo "$color is my favorite<br>";  
                //the output is red.
                
        // In single quotation, it will give you a string not a value.
        echo '$color is my favorite <br>';
                // the output is $color.

        echo "${color} is my favorite color";
    ?>
</body>
</html>