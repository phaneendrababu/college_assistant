<?php
include 'conn.php';

    $sql="SELECT * FROM `faculty_list` WHERE id='111'";
   $run=mysqli_query($conn,$sql); 
   //$result=$conn->query($sql);
  
  while($row=mysqli_fetch_array($run,MYSQLI_NUM)) 
  {
      $id=$row[0];
      $att_id=$row[1];
      $subject=$row[2];
  }
  //echo"$row[0]";
  $var1=explode(',',$att_id);
  $var2=explode(',',$subject);
  foreach ($var1 as $v1) {
    echo "$v1<br>";
}
 /* foreach ($var2 as $v2) {
    echo "$v2 ";
}*/
    


?>