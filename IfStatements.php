<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statements</title>
</head>
<body>
    <?php 
        $Weather = "airy";
        if ($Weather == "Sunny") {
            echo "Weather is pleasant.";
        } elseif($Weather == "Rainy") {
            echo "It is not rainy";
        } elseif($Weather == "Cloudy") {
            echo "It is cloudy";
        } else {
            echo "none of the above";
        }
    
    ?>
    <hr>
    <?php 
        $Bought_Product = true;
        if($Bought_Product) {
            echo "<h1>Thank you!</h1>";
            echo "<p>Your product will be dispatched soon</p>";
        } else {
            echo "<h1>Please Wait!</h1>";
            echo "<p>Your payment is in processing.</p>";
        }
    ?>
    <hr>
   <?php 
     $a = 4;
    //  $b = 0
     $b = 3;
     $c = "cannot be out";
     /*
     if ($b>0) {
         $c=$a/$b;
     }
     echo $c;
     */
    if ($b<5 && $a>0) {
        $c=$a/$b;
    }
    echo $c;
   ?>
</body>
</html>