<?php
     include 'conn.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    	
        $sql1 = "SELECT * FROM faculty_list WHERE id = '" .mysqli_real_escape_string($conn, $_POST['id']). "';" ;
            $result1=$conn->query($sql1);
            
    	if ($result1->num_rows>0) {
    	    
    	    
    	     $sql2 = "SELECT * FROM faculty_details WHERE faculty_id='" . mysqli_real_escape_string($conn, $_POST['id']). "' ";
	         $result2=$conn->query($sql2);
	         if ($result2->num_rows==1) {
                      echo "user exist";
	            }
	         else {
    	           $sql3 = "INSERT INTO faculty_details VALUES ('" .mysqli_real_escape_string($conn,$_POST['id']). "','" .mysqli_real_escape_string($conn, $_POST['password']). "','" .mysqli_real_escape_string($conn, $_POST['phoneno'])."');";
	               
	               if($conn->query($sql3) == TRUE){
	                     echo "Registration Successful";
	                  }
    	           else{
                      echo "Connection problem";
                    }
	            }
	         }
    	
    	else {
        	echo "No match in faculty database";
    	}
    	$conn->close();
    }
    ?>