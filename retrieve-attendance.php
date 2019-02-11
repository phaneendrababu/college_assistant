<?php
include 'conn.php';

if(isset($_POST['roll_no']))
{
	$roll_no=$_POST['roll_no'];
	
	$sql=mysqli_query($conn,"SELECT * FROM mark_attendence WHERE id='$roll_no'");
	
	while($row=mysqli_fetch_array($sql))
	{
		$sub1_present=$row[2];
		$sub1_absent=$row[3];
		$sub2_present=$row[4];
		$sub2_absent=$row[5];
		$sub3_present=$row[6];
		$sub3_absent=$row[7];
	}
	echo "$sub1_present,$sub2_present,$sub3_present,$sub1_absent,$sub2_absent,$sub3_absent";
}

?>