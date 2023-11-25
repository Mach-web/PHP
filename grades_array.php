<html>
    <head>
        <Title>Assignment on arrays</Title>
    </head>
    <body Bgcolor="Teal">
        <h1>Grades Evaluation</h1>
        <?php
//        $marks = array(78, 54, 76, 56, 87, 34, 92, 72);
        $marks = [78, 54, 76, 56, 87, 34, 92, 72];
        $sum = 0;
        $len = 0;
        $failed_units = 0;
        foreach($marks as $mark){
            $sum += $mark;
            $len++;
            if($mark < 40){
            $failed_units++;    
            }
        }
	    $average = $sum/$len;
        echo "The total marks is: $sum<BR>";
        echo "The average marks is: $average<BR><p>";

        echo "Grade: ";
        if($average >= 70 && $average <= 100){
            echo "A<BR>";
        }
        else if($average >= 60){
            echo "B<BR>";
        }
        else if($average >= 50){
            echo "C<BR>";
        }
        else if($average >= 40){
            echo "D<BR>";
        }
        else if($average >= 0){
            echo "Fail<BR>";
        }
        else{
            echo "Invalid average<BR>";
        }
        
        echo "The number of failed units is: $failed_units<BR>";
        // Make some remarks based on failed units
        echo "Remarks:  ";
        if($failed_units == 0){
            echo "Proceed to next level.<BR>";
        }
        else if($failed_units == 1 || $failed_units == 2){
            echo "Repeat Carry forward.<BR>";
        }
        else if($failed_units == 3 || $failed_units == 4){
            echo "Take supplementary on failed units.<BR>";
        }
        else if($failed_units == 5 || $failed_units == 6){
            echo "Repeat.<BR>";
        }
        else if($failed_units == 7 || $failed_units == 8){
            echo "Discontinue.<BR>";
        }
        /*
    Assignment
    Create an array to capture 8 subjects. Display the sum and average.
    Based on the average, find the overall grade.
    Find how many units have been failed.
    Based on failed units, make some remarks.
    if(0){Remark: Proceed to next level.}
    if(1 or 2){Repeat Carry forward}
    if(3 or 4){Take supplementary on failed units}
    if(5 or 6){Repeat}
    if(7 or 8){Discontinue}
    */
        ?>
    </body>
</html>

