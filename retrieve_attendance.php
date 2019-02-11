<?php

include 'conn.php';

if(isset($_POST['roll_no']))
{
	$jntu_no=$_POST['roll_no'];
	
	$sql=mysqli_query($conn,"SELECT * FROM mark_attendence WHERE jntu_no='$jntu_no'");
	
	while($row=mysqli_fetch_array($sql))
	{
		$sub1_present=$row[3];
		$sub1_absent=$row[4];
		$sub2_present=$row[5];
		$sub2_absent=$row[6];
		$sub3_present=$row[7];
		$sub3_absent=$row[8];
	}
	echo "$sub1_present,$sub2_present,$sub3_present,$sub1_absent,$sub2_absent,$sub3_absent";

}
?>