<?php

        // Before Loading the page, names, emails, website and genders must be empty.
            $NameError="";
            $EmailError="";
            $GenderError="";
            $WebsiteError="";

            // whether form submit is declared or not.
            if(isset($_POST['submit'])) {
                
                // if input for name is empty.
                if(empty($_POST['name'])) {
                    $NameError="Name is require";
                } else {
                    $Name = Test_User_Input($_POST['name']);

                    // Adding Regular Expressions for name
                    if (!preg_match("/^[a-zA-Z-' ]*$/",$Name)) {
                        $NameError = "Only letters and white space allowed";
                    }
                }


                // if input for email is empty.
                if(empty($_POST['email'])) {
                    $EmailError="Email address is required";
                } else {
                    $Email = Test_User_Input($_POST['email']);

                    // Adding Regular Expressions for email.
                    if(!preg_match("/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/", $Email)) {
                        $EmailError = "Invalid Email Format";
                    }
                }


                // if input for gender is empty.
                if(empty($_POST['gender'])) {
                    $GenderError = "Gender Selection must be done";
                } else {
                    $Email = Test_User_Input($_POST['gender']);
                }


                // if input for website is empty.
                if(empty($_POST['website'])) {
                    $WebsiteError = "Please provide a url for website";
                } else {
                    $Website = Test_User_Input($_POST['website']);


                    // Adding Regular Expressions for Website.
                    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$Website)) {
                        $WebsiteError = "Invalid URL";
                    }
                }

                // Showing the data you entered.
                // Now putting a condition on the data that it must not be empty. if the input is empty, it will not show any data.
                // But, we are getting a bug when enter a wrong input name, example for name is 52loop, it is supposed to invalid.
                // Now, giving a condition for regular expression to be true.

                if(!empty($_POST["name"]) &&!empty($_POST["email"]) && !empty($_POST["gender"]) && !empty($_POST["website"])) {

                   
                        echo "<h2>Your Submit Information:</h2> <br>";
                         echo "Name: {$_POST["name"]}<br>";
                         echo "Email: {$_POST["email"]}<br>";
                         echo "Gender: {$_POST["gender"]}<br>";
                         echo "Website: {$_POST["website"]}<br>";
                         echo "Comments: {$_POST["comment"]}<br>";
                    }
                    
                 
                    
                   
                
            } 

            
               
                
            

            // Will return the datas of names, email , gender and website called by the $Website,$Name, $Gender and $Email.
            function Test_User_Input($Data) {
                return $Data;
            }


?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation Project</title>
</head>
<body>

    <h2>Form Validation With PHP</h2>
    <form action="FormValidationProject1.php" method="post">
        <legend>* Please Fill Out the following Fields:</legend>
            <fieldset>
                 Name: <br>
                <input type="text" class="input" name="name" value="">
                     <?php echo $NameError;    ?>        *<br>
                Email: <br>
                <input type="text" class="input" name="email" value="">
                      <?php echo $EmailError;    ?>       *<br>
                Gender: <br>
                <input type="radio" class="radio" name="gender" value="male">Male
                <input type="radio" class="radio" name="gender" value="female"> Female
                        <?php echo $GenderError; ?>        *<br>
                Website: <br>
                <input type="text" class="input" name="website" value="">
                    <?php echo $WebsiteError;?>          *<br>
                Comments: <br>
                <textarea name="comment" id="" cols="25" rows="5"></textarea>
                <br> <br>
                <input type="submit" name="submit" value="Submit your Information">

            </fieldset>
           

    </form>
</body>
</html>