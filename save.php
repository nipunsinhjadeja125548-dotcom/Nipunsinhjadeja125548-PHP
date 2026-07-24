<?php

$name = $_POST['name'];
$father = $_POST['father'];
$course = $_POST['course'];
$mobile = $_POST['mobile'];

// Create Cookies
setcookie("name", $name, time()+3600, "/");
setcookie("father", $father, time()+3600, "/");
setcookie("course", $course, time()+3600, "/");
setcookie("mobile", $mobile, time()+3600, "/");

header("Location: view.php");
exit();

?>