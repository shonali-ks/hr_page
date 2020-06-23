<?php
   include("config.php");
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['name']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT * FROM login WHERE name = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $name = $row["name"];
      $pass = $row["password"];
      //echo $mypassword,$myusername,$row;
      echo $name,$pass;

		
      if($name == $myusername && $pass = $mypassword) {
         header("location:details.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
      }
   }
?>