<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Related to 'Another Working Example'</title>
</head>
<body>
    <?php
        // to see what you are receiving from examplehtml.php
        print_r ($_POST);
    ?>

    <?php 
        $Username = $_POST["Username"];
        $Password = $_POST["password"];
        $Submit = $_POST["submit"];

        if (isset($_POST["submit"])) {
            echo " <br>Successful Login. <br>";
            echo "Welcome : {$Username}";
        }

        // Adding basic validation

                // Condition for if username is present and username is not empty

                 /*
                    if (isset($Username) && !empty($Username)) {
                   echo " <br> Username is set with the name of : {$Username}";
               } else {
                   echo "<br> No Username is detected";
               }

                if (isset($Password) && !empty($Password)) {
                   echo " <br> Password is : {$Password}";
               } else {
                   echo "<br> No Password is detected";
               }

                */


            // if username is set then post the post the username posted by the user.

            if(isset($_POST["Username"])){
                $Username = $_POST["Username"];
                echo "<br>$Username <br>";
            } else {
                $Username = "";
            }

            if(isset($_POST["password"])) {
                $Password = $_POST["password"];
                echo "<br>$Password <br>";
            } else {
                $Password = "";
            }
              
            

            // if you refresh "examplephp.php", then you will get error, it is because "examplephp.php" is not getting any data from "examplehtml.php", all its data is erased when you are refreshing it, that is why you are getting error.
    ?>
</body>
</html>