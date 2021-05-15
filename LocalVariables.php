<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Variables</title>
</head>
<body>


    <?php   

    // The errors you see are for understanding.
    
        // Local Variables:
            // A variable declared within a function has a Local Scope and can only be accessed within that function.


        $MyNumber = 4545456;
        function Addition() {
            $a = 5;
            $b = 2;
            $c = $a + $b;

            echo $MyNumber."<br>"; // It will not work, because $MyNumber is outside the scope of Addition() function meaning $MyNumber has its own local scope outside of Addition() function.

            echo $a."<br>";
            echo "Addition is {$c} <br>";

                //Here, $a, $b and $c are local variables. They cannot be accessed outside the function scope.
        }
        
        
        //echo $a."<br>"; // it will not work, because $a is a local scope.
        Addition();
    ?>
</body>
</html>