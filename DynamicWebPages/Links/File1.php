<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File1</title>
</head>
<body>

<?php
    // How to use 'get' with links.

?>
<?php
    $Name = "Nadia Islam";
?>

<?php
    $Position= "Support Coordinator & Manager";
?>

<!-- Adding search query in our anchor tag -->
<a href="File2.php?Name=<?php echo $Name;?>">Click1</a> <br>
<a href="File2.php?Name=<?php echo $Name;?> &<?php  echo $Position;  ?>">Click2</a> <br>
<a href="File2.php?Name=<?php echo $Name;?> &Position=<?php echo urlencode($Position);  ?>">Click3</a>
    
</body>
</html>