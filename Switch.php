<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statements</title>
</head>
<body>
    <?php
        //$Weather = "Cloudy";
        $Weather = "CloudyBlurr";
    switch($Weather) {
        case "Sunny": echo "Weather is quite pleasant outside";
        break;
        case "Rainy": echo "It is raining outside";
        break;
        case "Cloudy": echo "it is expected to rain";
        break;
        default: echo "Weather cannot be forecast";
    }
    ?>
<hr>
    <?php
        $Restricted_Area="Guard";
        //$Restricted_Area = "Media";
        // $Restricted_Area = "Nadia";
        switch($Restricted_Area) {
            case "Guard": 
                echo "Permission granted";
            break;

            case "Office Boy":
            case "Public":
            case "Media":
                echo "Permission Denied";
                break;
            default:
                echo "Call your supervisor for entry pass!";
        }
    ?>
</body>
</html>