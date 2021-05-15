<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variables</title>
</head>
<body>
    <?php

        // Global Variables
            // A variable declared outside a function has a Global Scope and can only be accessed outside a function.

            $MyNumber = 456456; // Local Scope

            
            function Addition() {
                global $MyNumber;
                //$MyNumber;
                $a = 5;
                $b = 2;
                $c = $a + $b;
                echo "New Global Addition:".($MyNumber + $c)."<br>";
                echo "Addition is {$c}";
            }
            Addition();
    ?>
</body>
</html>