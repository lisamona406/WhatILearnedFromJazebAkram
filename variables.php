<?php

// Rules for Variable in PHP

/*
1. Start with $.   $name
2. Contain dashes(-).    $my-name
3. underscore(_).        $my_name
4. letters(a, b, ...A,B,..)  $myName
5. numbers(1,2,....)         $name12
6. case sensitive example: a is not equal to A   $Name is not same to $name.

7. No space.   $nam e
8. Cant start with numbers.   $13name
9. Bad practice (putting - _at start)  $-name
 */



 $name = "Nadia";
 echo $name. "<br>";
$age = 22;
echo $age . "<br>";

$a = 3;
$b = 6;
$c = $a + $b;
echo $c;


?>