<?php
// print
echo "welcome to php scripting". "<p>";

// Variables
$myname = "MachTechie";
echo $myname."<br>";
echo var_dump($myname)."<br>";

// Arithmetic operations
$sub1 = 3;
$sub2 = 4;
echo "Modulus of 3 and 4 is: ";
$output = $sub1 % $sub2;
echo $output;
echo "<br>". "3 ** 4 = ".$sub1 ** $sub2;
//$output = $sub1 ** $sub2;
//echo $output;

// Constants 
// can use the keyword const or define() to declare a constant
// define(nameOfConstant, value, case-sensitivity)
define('Ratio', 0.67);
echo "<p>"."Constant Ratio: ".Ratio;

const ratio = 0.01;
echo "<br>const ratio: ".ratio;

$ratio = 0.02;
echo "<br>variable ratio: ".$ratio;

// Control Structures
// Decision structures: Normally use conditional statements
// if statement - if(condition){statements;}elseif(condition 2){stats;}else{stats;}
$marks = 66;
if($marks >= 70){
    echo "<br>". "Grade A";
}
elseif($marks >= 60){
    echo "<br>". "Grade B";
}
elseif($marks >= 50){
    echo "<br>". "Grade C";
}
elseif($marks >= 40){
    echo "<br>". "Grade D";
}
else{
    echo "<br>". "You have failed";
}
?>

