<?php
include_once 'database.php';
if(isset($_POST['Submit']))
{	 
	 $first_name = $_POST['firstname'];
	 $last_name = $_POST['lastname'];
	 $city_name = $_POST['country'];
	 $email = $_POST['subject'];

	 $sql = "INSERT INTO contact (firstname,lastname,country,subject) VALUES ('$first_name','$last_name','$city_name','$email')";
	 if (mysqli_query($conn, $sql)) 
	 {
		echo "New record created successfully !";
	 } 
	 else 
	 {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>
