<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Functions</title>
</head>
<body>
    <?php
        $color = array("red", "blue", "green");
        array_pop($color);
        print_r($color);
        echo "<br>";
        array_pop($color);
        echo "<br>";
        print_r($color);
        array_push($color, "pink", "blue", "green", "black", "white");
        echo "<br>";
        print_r($color);
    ?>

    <?php 
    echo "<br>";
    $Numbers = array(13,54,6,89,100,15,12,789,1000);
    echo count($Numbers)."<br>";
    Max: echo max($Numbers)."<br>";
    Min: echo min($Numbers)."<br>";
    ?>
    <p> Yes / No: 
        <?php
            echo in_array(89, $Numbers)."<br>";
        ?>
    </p>

    <?php
        echo sort($Numbers)."<br>";
        print_r($Numbers)."<br>";
    ?>

    <?php 
        echo rsort($Numbers)."<br>";
        print_r($Numbers);
    ?>


    <h3>Implode Function</h3>
    // The implode() function returns a string from the elements of an array.
    <?php
        $S_Quote = array("Never", "Give", "Up", "IN", "Life");
        echo "<br>";
    ?>
    Implode: <?php echo implode(" ",$S_Quote)."<br>"; ?>
    
    // The explode() function breaks a string into an array. It will not work with echo, so use print_r incase of explode.
    <?php
        echo "<br>";
    ?>
    Explode: <?php  
    $Quote = "Never Give Up in Life";
    print_r (explode(" ",$Quote));
    ?>


</body>
</html>