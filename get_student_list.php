<?php
include 'conn.php';
/*if(isset($_POST['section_name']))
{
    $a=',';*/
    $id=$_POST['section_name'];
    $sql="SELECT * FROM `mark_attendence` WHERE att_id='$id'";
   $run=mysqli_query($conn,$sql); 
  
  while($row=mysqli_fetch_array($run,MYSQLI_NUM)) 
  {
      echo "$row[0],";
  }

?>