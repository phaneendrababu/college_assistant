<?php

     include 'conn.php';
	 
	 // Check whether username or password is set from android	
     /*if(isset($_POST['username']) && isset($_POST['password']))
     {
		  // Innitialize Variable
	   	  $username = $_POST['username'];
          $password = $_POST['password'];
          
          //echo $username;
         // echo $password;
		  
		  // Query database for row exist or not
        $sql = "SELECT * FROM student_details";
          echo $username;
          echo $password;
		  
          
          $result=$conn->query($sql);
         echo $result->num_rows;
if($result->num_rows>0){
	echo "true";
}
else{
	echo "false";
}
  	}
	
?>*/

   // Check connection
	if ($conn->connect_error) {
    	    die("Connection failed: " . $conn->connect_error);
	}
       $sql = "SELECT * FROM student_details WHERE jntuno='" . mysqli_real_escape_string($conn, $_POST['username']). "' AND password='" .mysqli_real_escape_string($conn, $_POST['password'])."' ";
	$result=$conn->query($sql);
	if ($result->num_rows==1) {
           echo "Successful";
	} else {
    	   echo "Unsucessful";
	}
	$conn->close();
?>