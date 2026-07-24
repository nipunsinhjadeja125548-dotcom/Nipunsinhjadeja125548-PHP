<?php
echo "<center>";
echo "<h2>Student Details</h2>";

if(isset($_COOKIE["name"]))
{
    echo "<table border='1' cellpadding='10'>";

    echo "<tr><td>Student Name</td><td>".$_COOKIE["name"]."</td></tr>";
    echo "<tr><td>Father Name</td><td>".$_COOKIE["father"]."</td></tr>";
    echo "<tr><td>Course</td><td>".$_COOKIE["course"]."</td></tr>";
    echo "<tr><td>Mobile No.</td><td>".$_COOKIE["mobile"]."</td></tr>";

    echo "</table><br>";

    echo "<a href='delete_cookie.php'>Delete Cookie</a>";
}
else
{
    echo "No Cookie Found";
}

echo "</center>";
?>