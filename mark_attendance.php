<?php

include 'conn.php';
// Check connection
if(isset($_POST['ispresent']))
{
$var =$_POST['ispresent'];
//$var='sub2_absent';
$roll_no=$_POST['roll_no'];
//$roll_no='1b5';
//echo "$var";
//echo "$roll_no";
$sql="SELECT * from mark_attendence WHERE id='$roll_no'";
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
        //$a1=$a1+1;
        echo"$a1";
        //$sql=mysqli_query($conn,"UPDATE mark_attendence SET sub1_present=$a1 WHERE id='$roll_no'");
        //echo "updated successfully";
    }
     if($var=='sub2_present')
    {
        //$a3=$a3+1;
        echo "$a3";
        //$sql=mysqli_query($conn,"UPDATE mark_attendence SET sub2_present=$a3 id='$roll_no'");
    } 
    if($var=='sub3_present')
    {
       // $a5=$a5+1;
       echo "$a5";
        //$sql=mysqli_query($conn,"UPDATE mark_attendence SET sub3_present=$a5 id='$roll_no'");
    } 
    if($var=='sub1_absent')
    {
      //  $a2=$a2+1;
      echo "$a2";
       // $sql=mysqli_query($conn,"UPDATE mark_attendence SET sub1_absent=$a2 id='$roll_no'");
    }
     if($var=='sub2_absent')
    {
        //$a4=$a4+1;
        echo "$a4";
       // $sql=mysqli_query($conn,"UPDATE mark_attendence SET sub2_absent=$a4 id='$roll_no'");
    }
     if($var=='sub3_absent') 
    {
       // $a6=$a6+1;
       echo "$a6";
        //$sql=mysqli_query($conn,"UPDATE mark_attendence SET sub3_absent=$a6 id='$roll_no'");
    }
}
?>