<?php
 //connect to the server and select database 
 $db = mysqli_connect("localhost","root","", "project");
 // get values from form in register.php file
 $username =$_POST['user'];
 $password =$_POST['pass'];
 //to prevent mysql injection
 $username = mysqli_real_escape_string($db, $username);
 $password = mysqli_real_escape_string($db, $password);
 
 //query the database for the user
 $result=mysqli_query($db, "select * from users where username = '$username' and password='$password'")
             or die("Failed to query database" .mysqli_error());
 $row = mysqli_fetch_array($result);
 if ($row['username']== $username && $row['password'] == $password )
 {
	 //to redirect form on a particular page
	 header("location:http://localhost/reeta/home.php");
          } 
		  else {
          	echo "Failed to login";
          }
 ?>         
                   
