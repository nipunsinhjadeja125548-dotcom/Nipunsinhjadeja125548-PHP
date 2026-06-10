<!DOCTYPE html>
<html>
<head>
    <title>PHP Operators</title>
</head>
<body>

<h2>PHP Operators Example</h2>

<?php
$a = 20;
$b = 10;

echo "<h3>Arithmetic Operators</h3>";
echo "Addition = " . ($a + $b) . "<br>";
echo "Subtraction = " . ($a - $b) . "<br>";
echo "Multiplication = " . ($a * $b) . "<br>";
echo "Division = " . ($a / $b) . "<br>";
echo "Modulus = " . ($a % $b) . "<br>";

echo "<h3>Comparison Operators</h3>";
echo ($a == $b ? "Equal" : "Not Equal") . "<br>";
echo ($a > $b ? "A is Greater" : "B is Greater") . "<br>";

echo "<h3>Logical Operators</h3>";
if($a > 0 && $b > 0)
{
    echo "Both numbers are positive<br>";
}

echo "<h3>Assignment Operator</h3>";
$c = $a;
echo "Value of C = " . $c . "<br>";
?>

</body>
</html>