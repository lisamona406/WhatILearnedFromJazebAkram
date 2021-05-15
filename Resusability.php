<?php
    // Connecting with 'FunctionFileReusibility.php' file.
    //include("FunctionFileReusibility.php");

    // require is used for strict purposes or restriction purposes
    //require("FunctionFileReusibilityA.php");
    //require_once("FunctionFileUsibilityA.php")

    include_once("FunctionFileReusibility.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reusability</title>
</head>
<body>
    <?php
        Welcome();
        $foo = Addition_Using_Function_Parameters(15, 10);
        echo $foo;
    
    ?>
</body>
</html>