<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Branching Statements</title>
</head>
<body>
    <h3>Break and Continue Statements</h3>
    <?php
        /*
            Suppose, you have data of 1000 customers in your website. You want to find a particular name or details. You want to find about 'Alex' in your website. 'Alex' is in array 300. You have to find out by using for loop. It takes a lot of time. It is not efficient.

         */

         $Names = array("Jazeb", "Akram", "Ali", "Alex","Tait", "Shaan", "David","Roth");

         for ($i=0; $i<=7;$i++) {
            if($Names[$i] == "Alex") {
                continue;
            }
            echo $Names[$i]."<br>";
         }
         //print_r($Names);
    ?>
</body>
</html>