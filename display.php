<?php
include('connection.php');
$sql = "Select * from students";
$result = mysqli_query($conn, $sql);
print "<P><H1> Records from students Table </H1></P>";
?>
<Table Border =4>
<TR><TH>Admission No</TH><TH>Student Name</TH><TH>Gender</TH><TH>Course</TH><TH>Adm Year</TH>

<?php
if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
	//echo "Admission No: ".$row["AdmNo"]."<Br>Student Name: ".$row["SName"]."<Br>Gender: ".$row["Gender"]."<Br>Course: ".$row["Course"]."<BR>Year of Admission: ".$row["Year"]."<P>";
	echo "<TR><TD>".$row["AdmNo"]."</TD><TD>".$row["SName"]."</TD><TD>".$row["Gender"]."</TD><TD>".$row["Course"]."</TD><TD>".$row["Year"]."</TD><TR>";
	}
}
else{
	echo "No records";
}
mysqli_close($conn);
?>