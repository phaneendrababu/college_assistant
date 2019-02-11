<?php

include 'conn.php';
// Check connection
if(isset($_POST['is_present']))
{
$var =$_POST['is_present'];
//$var= 'sub1_present';
$roll_no=$_POST['roll_no'];
//$roll_no='1b5';
$inc=$_POST['increment'];
//echo $inc;
$sql="SELECT * from mark_attendence id='$roll_no'";
$run=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($run))
{
    $a1=$row[3];
    $a2=$row[4];
    $a3=$row[5];
    $a4=$row[6];
    $a5=$row[7];
    $a6=$row[8];
}

   if($var=='sub1_present')
    {
        $sql=mysqli_query($conn,"UPDATE mark_attendence SET sub1_present='$inc' WHERE id='$roll_no'");
        //echo "success";
    }
     if($var=='sub2_present')
    {
        $sql=mysqli_query($conn,"UPDATE mark_attendence SET sub2_present='$inc' WHERE id='$roll_no'");
    } 
    if($var=='sub3_present')
    {
        $sql=mysqli_query($conn,"UPDATE mark_attendence SET sub3_present='$inc' WHERE id='$roll_no'");
    } 
    if($var=='sub1_absent')
    {
        $sql=mysqli_query($conn,"UPDATE mark_attendence SET sub1_absent='$inc' WHERE id='$roll_no'");
    }
     if($var=='sub2_absent')
    {
        $sql=mysqli_query($conn,"UPDATE mark_attendence SET sub2_absent='$inc'  WHERE id='$roll_no'");
    }
     if($var=='sub3_absent') 
    {
        $sql=mysqli_query($conn,"UPDATE mark_attendence SET sub3_absent='$inc'  WHERE id='$roll_no'");
    }
}
?>