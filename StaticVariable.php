<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Variable</title>
</head>
<body>
    <?php
        function NormalVariable() {
            $value=1;
            echo $value."<br>";
            $value++;
        } 
        NormalVariable(); //1
        NormalVariable(); // 1
        NormalVariable(); // 1


        // Whenever you put 'static', it will retain its old value and proceed to the new value which was not the case in NormalVariable().
        function StaticVariable() {
            static $value = 1;
            echo $value." static <br>";
            $value++;
        }
        StaticVariable(); // 1
        StaticVariable(); // 2
        StaticVariable(); // 3
        StaticVariable(); // 4
        StaticVariable(); // 5
    ?>
</body>
</html>