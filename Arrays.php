<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>

    <?php 
        $name = array('Sarah', 'Nadia', 'Ali');
        echo $name[1] ."<br>";
    ?>


    <?php 
        $Food = array('Pizza', 10, 15, array("Asian", "French", "German"), 'Pasta');
        echo $Food[2]. "<br>";
        echo $Food[3] [2]."<br>";
         $Food[56] = "Mango" . "<br>";
         $Food[90] = "Apple". "<br>";
        echo print_r($Food);
        
    ?>

    <pre>
        <?php
        echo print_r($Food)."<br>"; 
        ?>
    </pre>

    <h3>Associative Array</h3>
    <?php
        $Color=array("A"=>"40", "B"=>"Pizza");
        echo "<br>";
        echo $Color["B"]."<br>";
        echo $Color["A"]. "<br>";
    ?>

    <?php 
        $food = array("Asian"=>"Pizza", "Italian"=>"Biryani");
        echo $food["Asian"]. " is for ". $food["Italian"]."<br>";
        echo print_r($food);
    ?>
    
</body>
</html>