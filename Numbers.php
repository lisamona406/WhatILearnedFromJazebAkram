<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    <?php
        $FirstNumber = 3;
        $SecondNumber = 4;
        $ThirdNumber = 3.65478;
    ?> <br>
    <?php echo $ThirdNumber+9-6; ?> <br>
    <?php echo 3.1/6;      ?> <br>

    
    <?php //echo 7/0;
    // it will give you an error, you cannot divide a number by 0.
    ?>  
    
    Ceil:<?php echo ceil(($ThirdNumber)); ?>  <br>
     Floor:<?php echo floor(($ThirdNumber)); ?>  <br>
    <?php echo "is {$FirstNumber} :integer". is_int($FirstNumber); // "1" means True or Yes.
    // "0" means False or No.
    // Note: In case of false, you will not see '0'. Having nothing is '0'.
     ?> <br>
     <?php echo "is {$ThirdNumber} : float ". is_int($ThirdNumber); ?> <br>
     <?php echo "is {$FirstNumber} : float ".  is_float($FirstNumber); ?> <br>
      <?php echo "is {$ThirdNumber} : float ".  is_float($ThirdNumber); ?> <br>
        <?php echo "is {$FirstNumber} : numeric ".  is_numeric($FirstNumber); ?> <br>
      <?php echo "is {$ThirdNumber} : numeric ".  is_numeric($ThirdNumber); ?> <br>
      converting decimal to binary : <?php echo decbin(3); ?> <br>
      converting binary to decimal: <?php echo bindec(11); ?> <br>
      squareroot of a number: <?php echo sqrt(8); ?> <br>
      absolute value: <?php echo abs(-50 + 100); ?> <br>
    exponent of a number: <?php echo pow(10,3); ?> <br>
    remainder of a number: <?php echo fmod(10,3); ?> <br>
    Random of a number by a computer: <?php echo rand(); ?> <br>
    Random within 500 and 1600: <?php echo rand(500, 1600);?> <br>
    <?php echo $SecondNumber+=2; ?>




</body>
</html>