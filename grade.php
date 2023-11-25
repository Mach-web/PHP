<html>
<HEAD>
 <title> using if.. elseif</title>
</HEAD>
<body Bgcolor="Teal">
<h1>Grade checking</h1>
<?php
$mark=-7;
echo "<br> <B> mark=$mark </B> </br>";
if ($mark<0||$mark>100)
{
echo "invalid range <br>";
}

elseif($mark<40)
{
echo "E";
}

elseif($mark<50)
{echo "Grade D";
}
elseif($mark<60)
{echo "Grade C ";
}
elseif($mark<70)
{echo "Grade B";
}
else{
echo "Grade A";
}
for($num=1;$num<20;$num++){
if($num%2==0)
{
echo "our number is:$num<br>";
}
}
$val=7;
$factorial=1;
$i=1;
while($i<=7)
{
$factorial=$factorial*$i;
$i++;
}
echo "<br>the factorial is$factorial </br>";
$x=2;
do {
echo"our number is:$x<br>";
$x+=2;
}
while($x<20);
$Age=array(30,55,80,40,60);
foreach($Age as $value)
{
echo"$value<br>";
$sum=0;
$sum= $sum + $$value;
echo"$sum";
}

 

?>

</body>
</html>