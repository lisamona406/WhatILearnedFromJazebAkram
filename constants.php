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
        $Name = 'Nadia';
        define ("Value_of_PI", 3.14);
        define("Value_of_gravity", 9.8);

        echo "PI value: ".Value_of_PI. "<br>";
        echo "Gravity value: ".Value_of_gravity. "<br>";

    ?>

    <hr>
    <?php 
        /*
        Value_of_PI = 45 + 78 + 900 + 1000;
        echo Value_of_PI;
        // it will show error. You cannot change the value of orginal constant.
        */
    ?>
    <hr>
    <?php
        define("Value_of_PI", 1000);
        echo "PI value: ".Value_of_PI. "<br>";
    ?>
</body>
</html>