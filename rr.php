<!-- <?php

// $username = filter_input(INPUT_POST,'username');
// $email = filter_input(INPUT_POST,'email');
// $password = filter_input(INPUT_POST,'password'); 
// $cpassword = filter_input(INPUT_POST, 'cpassword');
// $user_type = filter_input(INPUT_POST,'user_type');

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "test";

// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//   //die("Connection failed: " . $conn->connect_error);
//   die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());
// }

// else{
// $sql = "INSERT INTO registration(username, email, password, user_type) values ('$username','$email','$password', '$user_type')";

// if ($conn->query($sql) == true)
//  {

//     echo "New record created successfully";
//  } 
//  else 
//  {
//   echo "Error: " . $sql . "<br>" . $conn->error;
//  }

//  $conn->close();
// }
?> -->



<?php

$servername = "localhost";
 $username = "root";
 $password = "";
$dbname = "test";
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
$txtName = $_POST['username'];
$txtEmail = $_POST['email'];
$txtPhone = $_POST['password'];
$txtMessage = $_POST['user_type'];

// database insert SQL code
$sql = "INSERT INTO registration (username, email, password, user_type) VALUES ('$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "new Records Inserted";
}

?>