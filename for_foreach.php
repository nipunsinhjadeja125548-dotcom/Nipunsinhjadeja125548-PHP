<!DOCTYPE html>
<html>
<head>
    <title>For and ForEach Example</title>
</head>
<body>

<center>
<h2>Print Numbers 5 to 10 Using For Loop</h2>
</center>

<?php
for($i = 5; $i <= 10; $i++)
{
    echo $i . "<br>";
}
?>

<hr>

<center>
<h2>Print Numbers 5 to 10 Using ForEach Loop</h2>
</center>

<?php
$numbers = array(5, 6, 7, 8, 9, 10);

foreach($numbers as $num)
{
    echo $num . "<br>";
}
?>
    
</body>
</html>