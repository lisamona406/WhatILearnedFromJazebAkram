<?php 
    // Connecting Username and password.
    // connect to input attribute of 'name'

    $Username = $_POST["Username"];
    $Password = $_POST["password"];


    /*
        $Username = $_POST["Username"];
        $Password = $_POST["password"];

        these both $Username and $Password can be written as 
        $_POST["Username"];
        $_POST["password"];
     */

    if (isset($_POST['submit'])) {

        if ($Username == "Nadia" && $Password == "Nadia") {
            echo "<h2>Welcome: {$_POST["Username"]}</h2>";
         echo "Welcome : {$_POST["Username"]}";
     } else {
         echo "<h2>Account Does not exist | Try Again!</h2>";
        echo "Account does not exist | Try again!";
     }
    } else {
        echo "<h2>Login Required</h2>";
    }
     
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <?php 
        // Working with PHP form
    ?>
    <fieldset>
        <legend>HTML5 form</legend>
        <form action="form.php" method="POST">
            <label for="Username">Username:</label>
            <input type="
            text" id="Username" name="Username"> <br> <br>
            <label for="password">Password:</label>
            &nbsp; <input type="password" id="password" name="password">
            <br> <br>
            <input type="submit" value="submitted" name="submit">
        </form>
    </fieldset>
</body>
</html>