<?php
include_once 'config.php';
   if($_POST['register'])
   {
      $uname = $_POST['uname'];
      $psw = $_POST['psw'];
      $cpsw = $_POST['cpsw'];
      $mobile = $_POST['mobile'];  
      // $user_type = $_POST['user_type'];

     $query = "INSERT INTO registration (uname, psw, cpsw, mobile)values('$uname', '$psw', '$cpsw', '$mobile')";
     $data = mysqli_query($conn,$query);

     if($data)
     {
      echo "Data Inserted Into Database";
     }
     else
     {
      echo "Failed";
     }
      
   }

?>