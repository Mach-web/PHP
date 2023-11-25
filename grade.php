<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body Bgcolor="Teal">
    <h1>Grade Checking</h1>
    <?php
    // if...else
    $mark = 65;
    if ($mark < 0 || $mark > 100){
        echo "Out of Range";
    }
    else if($mark < 40){
        echo "Grade E";

    }
    else if($mark < 50){
        echo "Grade D";
    }
    else if($mark < 60){
        echo "Grade C";
    }
    else if($mark < 70){
        echo "Grade B";
    }
    else{
        echo "Grade A";
    }
    echo "<p>
    <B>mark = $mark</B>
    <p>";
    // for loops
    for($num = 1; $num <= 20; $num++){
        if($num % 2 == 0){
        echo "Our number is: $num<BR>";
        }
    }
    //while loops
    $num = 19;
    $k = $num;
    $factorial = 1;
    while($num != 0){
        $factorial *= $num;
        $num--;
     }
    echo "The factorial of  $k is: $factorial<BR>";
     // Do....while
    $k = 1;
    do{
        if($k % 2 == 0){
            echo "The number is ".$k."<br>";
        }
        $k++;
    }
    while($k <= 20) 
    ?>
</body>
</html>

