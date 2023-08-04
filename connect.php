<?php
 
 $username = filter_input(INPUT_POST,'uname');
 $password = filter_input(INPUT_POST,'psw'); 
 
 //Database connection 
     if (!empty($username)) 
     {
        if (!empty($password))
        {
          $host = "localhost";
          $dbusername = "root";
          $dbpassword = "";
          $dbname = "test";
          
          $conn = new mysqli ($host, $dbusername,$dbpassword,$dbname);
          if(mysqli_connect_error())
       {
          die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_error());

       }
       else
       {
         $sql = "INSERT INTO login (username,password) values ('$username','$password')";
   
         if($conn->query($sql))
         {
         //    echo "New record is inserted successfuly";
         
         header('location:home.php');
         }
         else{
            echo "Error: ". $sql . "<br>". $conn->error;
         }
         $conn->close();
       }
    } 
     else{

      echo "Password should not be empty";
      die();
       
   }
   } 
 else {
   echo "username should not be empty";
   die();
}

   
?>