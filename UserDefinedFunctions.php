<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Functions</title>
</head>
<body>
    <?php 
        function Welcome() {
            echo "Welcome to Learning PHP <br>";
        }
        Welcome(); Welcome();Welcome(); Welcome();
    ?>
    <hr>
    <?php
        function Addition() {
        $a = 5;
        $b = 2;
        $c = $a + $b;
        echo "Addition is $c <br>";
        echo "Addition is $b + $a". " = ".$a + $b;
    }
    Addition();
    echo "<hr>";
    function Addition_Using_Function_Parameter ($x,$y) {
        $Result = $x + $y;
        echo "Addition Using Function Parameters $x and $y is : {$Result} <br> ";
    }
    Addition_Using_Function_Parameter(12,4);
    Addition_Using_Function_Parameter(116,45);
    Addition_Using_Function_Parameter(1200,84);
    echo "<hr>";
    function Addition_using_Return($p, $q) {
        $F = $p + $q;
        return $F;
    }
    $Total = Addition_using_Return(5,5);
    $Total1 = Addition_using_Return($Total, 8);
    echo $Total. "<br>";
    echo $Total1. "<br>";


    // This will give error. Because 'Addition' is redeclared again, thats why it will not work, use 'function Addition1
     //function Addition() 
    function Addition1(){
        $a = 5;
        $b = 2;
        $c = $a + $b;
        echo "Addition is $c <br>";
        echo "Addition is $b + $a". " = ".$a + $b;
    }
    echo "<hr>";


    



    ?>


    

</body>
</html>