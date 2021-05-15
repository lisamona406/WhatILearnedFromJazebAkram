<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File2</title>
</head>
<body>
    <?php ?>

     <pre>
     
     <?php
        // to see what we are getting from File1.php

        print_r($_GET);

        // When clicking 'Click2', we get 'Support_Coordinator' and 'Manager' as keys, it is a faulty. To avoid such problem, you have to put url encoding or rawurlencoding.
        // Adding URL encoding in File1, to remove the faulty that we are getting as keys.
        // On clicking 'Click3', we are not getting faulty keys, it is fixed by adding 'urlencoding' or 'rawurlencoding'.
    ?>
    </pre>
    <br>
    <!-- to get the name variable form File1.php --> 
    <!-- make sure that the variable you want to get from File1, it has to be after query that is '?'.  -->
    <?php 
    /* 
        <a href="File2.php?Name=<?php echo $Name?>">Click</a>,
        To get from the variable 'Name' from File1, we have to take out the value which iis coming after "File2.php?", we see here, it is "Name"
    */
    ?>
    <?php $Name= $_GET['Name']  ; 
        echo $Name. "<br>";
    ?>
    <?php $Position= $_GET['Position']  ; 
        echo $Position;
    ?>
</body>
</html>