<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>
<body>

<?php 
    $phrase1 = "Student who come late";
    $phrase2 = " in class sits in last with Rock ";
    $combine = $phrase1;
    $combine .= $phrase2;
    echo "Orginal full string: $combine <br>";

?>

<hr>

<p>UpperCase First Letter: <?php echo ucfirst($combine); ?></p>
<p>UpperCase words: <?php echo ucwords($combine); ?></p>
<p>Lowercase: <?php echo strtolower($combine);?></p>
<p>Uppercase: <?php echo strtoupper($combine);?></p>
 <?php echo $combine;
 ?>
<hr>

<p>Repeat: <?php echo str_repeat($combine, 3);?></p>
<p>Make substring from one point to another: <?php echo substr($combine, 5, 10)?></p>  
<p>Find position of any specific word: <?php echo strpos($combine, "come");?></p>
<p>Find character: <?php echo strchr($combine, "R");?></p>
<hr>

<p>Total Length of string:<?php echo strlen($combine); ?></p>
<p>Trim: <?php echo "A".trim(" B C D "). "E" ?> </p>
<p>Find specific and show after: <?php echo strstr($combine, "come")?>  </p>
<p>Replace word with new:  <?php echo str_replace("sit", "stand", $combine);?> </p>



</body>
</html>