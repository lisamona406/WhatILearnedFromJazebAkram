<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Variables</title>
</head>
<body>
    <?php 

        /*
            1. $GLOBALS
            2. $_SERVER
            3. $_REQUEST
            4. $_FILES
            5. $_SESSION
            6. $_ENV
            7. $_GET
            8. $_POST
            9.$_COOKIE


            $_GET, $_POST and $_COOKIE are the most important super global variables.


            $_POST is used in web forms(standard Contact Us form on a web).
            $_GET is used in URLs/Links(user Searching on a web).
            $_COOKIE(give user result by his previous track)
         */


         /*  $GLOBALS
                    PHP stores all global variables in an array called global index. The index hold the name of the variables.
          */

          $x = 75;
          $y = 25;

          function addition() {
              $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
          }
          addition();
          echo $z."<br>";
          print_r($GLOBALS);


    ?>
</body>
</html>