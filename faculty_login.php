<?php

     include 'conn.php';
	 
    
   // Check connection
	if ($conn->connect_error) {
    	    die("Connection failed: " . $conn->connect_error);
	}
       $sql = "SELECT * FROM faculty_details WHERE faculty_id='" . mysqli_real_escape_string($conn, $_POST['username']). "' AND password='" .mysqli_real_escape_string($conn, $_POST['password'])."' ";
	$result=$conn->query($sql);
	if ($result->num_rows==1) {
           echo "Successful";
	} else {
    	   echo "Unsucessful";
	}
	$conn->close();
?>