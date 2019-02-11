<!DOCTYPE html>
<html>
    <body>
        <form method="post" action ="image_upload.php" enctype="multipart/form-data>
            <input type="text" name="jntu_no">
            <p>ENTER JNTU NO</p>
            <input type="text" name="jntu_no">
            <p>UPLOAD IMAGE</p>
            <input type="file" name="student_image" >
            <input type="submit" name="submit" value="upload">
        </form>
            
            <?php
            
            include 'conn.php';
            
            if(isset($_POST['submit']))
            {
                $jntu_no=$_POST['jntu_no'];
                $image = $_FILES['student_image']['name'];
		        $image_tmp = $_FILES['student_image']['tmp_name'];
		        
		        
		        $sql= mysqli_query($conn,"UPDATE student_list SET image=$image where id='$jntu_no' ");
		        move_uploaded_file($image_tmp,"images/{$image}");
	
		        
            }
            ?>
    </body>
<html>