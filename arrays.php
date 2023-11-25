<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body Bgcolor="Teal">
    <?php
    /* 3 categories of array.
    1. Index arrays - An array with numeric values that r uniquely identified by index nos.
    2. Associative array - An array with string index with an association to some values.
    3. Multidimensional array - An array containing one or more arrays.
    */
    // Syntax: $ArrayName = array(value 1, value 2, value 3......value n)
    $age = array(30, 55, 80, 40, 60);
    /*for each loops - specifically designed to loop arrays.
    syntax:  foreach($array as $value){statements;}
    */
    $sum = 0;
    $len = 0;
    foreach($age as $value){
        echo "$value<BR>";
        $sum += $value;
        $len++;
    }
    $average = $sum / $len;
    echo "The Sum of the Array is: $sum<BR>";
    echo "The Average of the Array is: $average<BR>";


    /* Associative arrays
    $arrayName = array(index1-value, index2-value2......indexn-valuen)
    */
    // $marks = array("John" => "50", "Jane" => "65", "Winnie" => "35", "Daniel" => "20", "Max" => "45", "Dean" => "98");
    $marks = ["John" => "50", "Jane" => "65", "Winnie" => "35", "Daniel" => "20", "Max" => "45", "Dean" => "98"];
    print_r($marks);
    $num = count($marks);
    $total = array_sum($marks);
    echo "<P>Jane's marks: ".$marks["Jane"];
    // sort($marks);
    rsort($marks);
    echo "<P>No of Students: $num";
    echo "<p>Total No of Students: $total<p>";
    print("Sorted Array:   ");
    print_r($marks);
    echo "<p>";
    print_r(array_push($marks, "85"));
    echo "<p>Array afer push: ";
    print_r($marks);
    echo "<p>";

    $number = array ("42", "hello", 20);
    echo (array_sum ($number));
?>
</body>
</html>

