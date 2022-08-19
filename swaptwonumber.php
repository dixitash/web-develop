<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
// swap two variable without using third variable
$a=10;
$b=20;
[$a,$b] = [$b,$a];
echo $a."<br>";
echo $b."<br>";



?>
</body>
</html>