<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FunctionFileReusibility</title>
</head>
<body>
<?php
    function Welcome() {
        echo "Welcome to PHP course <br>";
    }

    function Addition_Using_Function_Parameters($x, $y) {
        $Result = $x + $y;
        echo "Addition Using Function Parameters is: {$Result}";
    }

    // Here you have to link 'FunctionFileReusibility.php' file with 'Resusibility.php' to understand reusibility concept.


?>
    
</body>
</html>