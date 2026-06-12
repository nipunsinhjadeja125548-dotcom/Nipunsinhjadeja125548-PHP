<?php
if(isset($_POST['btn']))
{
    $no1 = $_POST['no1'];
    $no2 = $_POST['no2'];
    $no3 = $_POST['no3'];

    if($no1 >= $no2 && $no1 >= $no3)
        $max = $no1;
    elseif($no2 >= $no1 && $no2 >= $no3)
        $max = $no2;
    else
        $max = $no3;

    if($no1 <= $no2 && $no1 <= $no3)
        $min = $no1;
    elseif($no2 <= $no1 && $no2 <= $no3)
        $min = $no2;
    else
        $min = $no3;

    echo "Result <br>";
    echo "Maximum Number = ".$max."<br>";
    echo "Minimum Number = ".$min;
}
?>