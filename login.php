<?php
include 'config.php';
$success=false;

$username = $_POST['uname'];
$password = $_POST['psw'];

$result = mysqli_query($conn, "SELECT * FROM registration WHERE uname='$username' AND psw='$password' AND user_type='admin';");
while($row = mysqli_fetch_array($result))
{
	$success = true;
	$user_id = $row['id'];
	$name = $row['uname'];
	$user_type= $row['user_type'];
}
if($success == true)
{	
	session_start();
	
	$_SESSION['id'] = $user_id;
	$_SESSION['user_type'] = $user_type;
	$_SESSION['uname'] = $name;

	header("location: home.php");
}
 else
{
	$result = mysqli_query($conn, "SELECT * FROM registration WHERE uname='$username' AND psw='$password' AND user_type='user';");
	while($row = mysqli_fetch_array($result))
	{
	$success = true;
	$user_id = $row['id'];
	$name = $row['uname'];
	$user_type= $row['user_type'];
	}
	if($success == true)
	{
		session_start();
		$_SESSION['id'] = $user_id;
		$_SESSION['user_type'] = $user_type;
		$_SESSION['uname'] = $name;			
		header("location: html/finall.php");
	}
	else
	{
		header("location: finall.php");
	}
}
?>