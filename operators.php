<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    
    <?php 



        // Increment

        $A = 5;
        echo ++$A."<br>";
        echo $A."<br>";

        $B = 5;
        echo $B++."<br>";
        echo $B."<br>";
        
        /*
            () has the highest precedence.
            * and / have second highest precedence
            + and - have the leaset precedence.
         */


         echo "1"."<br>";
         echo "2"."<br>";
         echo "3"."<br>";
         echo "4"."<br>";
         echo "5"."<br>";
         echo "6"."<br>";

         for ($i = 0; $i < 5; $i++) {
             echo "{$i} is printing on the screen"."<br>";
         }
    
    ?>
    <hr>
    <?php
        $N=2;
         for ($i=1; $i<=10;$i++) {
             $Result = $N*$i;
             echo $N . " * ". $i ." = ".$Result."<br>";
         }
    
    ?>
    <hr>

    <?php 
        $P = 1;
        while($P<=15) {
            echo "Nadia.com"."<br>";
            $P++;
        }
    
    
    ?>

    <hr>
    <h3>For-Each Loop</h3>
    <?php
        $Number = array(8,60,168,995,44,25,5,100);
        foreach($Number as $Num) {
            echo "Numbers: ${Num} <br>";
        }
    ?><hr>
    <?php
        $Food = array("item_number"=>1050,
        "name"=>"Pizza",
        "regin"=>"Italy",
        "Side_Food"=>"Pasta",
        "drink"=>"Cola",
        // "package_price"=>"Oops",
        //"package_price"=>null,
        //"package_price"=>78,
        //"package_price"=>true,
        "package_price"=> 0

    );

        foreach($Food as $Key=>$Value) {

            // echo "{$Key} have: {$Value} <br>";
            $Data= ucwords( str_replace("_", " ", $Key));
            if($Key=="package_price") {
                // if(is_bool($Value))
                // if(isset($Value))
                //if(empty($Value))
                //if(is_null($Value))
                //if(is_int($Value))
                //if(is_float($Value))
                if(is_numeric($Value)) {

                } else {
                    $Value = " cannot be determined";
                    //echo "Cannot be determined <br>";
                }
            }
            echo "{$Data} have: {$Value} <br>";
        }
    ?>
</body>
</html>