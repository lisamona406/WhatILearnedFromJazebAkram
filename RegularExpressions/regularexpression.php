<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expressions</title>
</head>
<body>

    <?php 

            /*
                Regular Expressions, 
                    Regular Expressions are used in form validation and is very useful in avoiding false and incorrect data from the user.
                    Regular Expression is a method of specifying a search string using a number of special characters that can precisely match a subsring.

                    Regular Expression can replace the need for a large amount of code, example,  You do not have to write tremendous amount of if statements or switch statements for validating forms. You can instead use "Regular expressions".

                    Quantifiers are wildcards that specify how many times to match the preceding string pattern.
*/
?>

<?php 

        /*
        Regular Expressions for Names:
        We know regular expressions for name is characters, our name do not contain special character like @, number, underscore, dollar sign, pound sign or dash or any other special character. It is done to prevent false name or data by the user.

        '-' is used for specifying range.
        /[a-z]/, it is range from lowercase 'a' to 'b'.
        /[A-Z]/, it is range from uppercase 'A' to 'B'.

        /[A-Za-Z]/, it is a range from uppercase 'A' to uppercase 'Z' and also lowercase 'a' to 'z'.

        /[A-Za-Z]/*, it is when you want to pick as many characters from your ranges.

        /^[A-Za-z]/*, it is when you want to start something with something specifically.

        /[^A-Za-z]/*, it will exclude everything

        ^n/[A-Za-z ]/*, if you want to start something compulsary with some letter.
        
        /^[A-Za-z ]*$/, it will tell the regular expressions to be within this limits.


        */

?>

<?php 

        /*
               1. [a-zA-Z], ranges between a-z and A-Z.
                    jazeb Akram

                2. [a-zA-Z]*, it can pick as many character as you want from your ranges.

                3.  ^[A-Za-z]*,to start something specifically.

                4. [^A-Za-z]*, it will exclude everything.
                
                5. ^N[A-Za-z]*, it will start specifically with N.

                6. ^[A-Za-z .]*$, it will end within this limits.

                
        */

        /*
            1. Name: /^[a-zA-Z. ]*$/

            2. Emails: /[a-zA-z]{3,}@[a-zA-z]{3,}[.]{1}[a-zA-Z]{3,}, example: AlexAlex@gmail.com

            3.Emails type1: [a-zA-Z0-9._-]{3,}@[a-zA-Z0-9._-]{3,}

            4. Emails type2: [a-zA-Z0-9._-]{3,}@[a-zA-Z0-9.-_]{3,}[.]{1}{a-zA-Z0-9.-_}{2,}

            5. Website: / (https: |ftp:)\/\/[a-zA-z0-9.\-_\?\$=&\#\~`!]+\.[a-zA-z0-9.\-_\?\$=&\#\~`!]*
        */


?>
    
</body>
</html>