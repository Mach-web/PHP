<?php
$units = intval($_POST['bill_txt']);
// $units = intval($units);
if($units <= 50){
        $bill = $units * 10;
    }
    else if($units <= 150){
        $bill = $units * 15;
    }
    else if($units <= 250){
        $bill = $units * 17.50;
    }
    else{
        $bill = $units * 20;
    }
    echo "<P>The total bill of ".$units." units is $bill";
?>

