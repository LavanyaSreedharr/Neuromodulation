<?php
include("config.php");

// Check connection
if ($db->connect_error) {
	die("Connection failed: "
		. $db->connect_error);
}

session_start();
$error='';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
   
      // username and password sent from form 
      $user = $_POST['username'];
      $psd = $_POST['psd'];

      $sql = "SELECT * FROM login WHERE username = '$user' and password = '$psd' and type = 'admin'";

      $result = mysqli_query($db,$sql);      
      $row = mysqli_num_rows($result);      
      $count = mysqli_num_rows($result);

      if($count == 1) {
	  
         // session_register("myusername");
         $_SESSION['login_user'] = $user;
         header("location: admin.php?user=".$_SESSION['login_user']);
      } else {
         $error = "Your Login Name or Password is invalid";
      }
   }