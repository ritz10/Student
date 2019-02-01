<?php
 //connect to the server and select database 
 $db = mysqli_connect("localhost","root","", "project1");
 // get values from form in new 1.php file
 $STUDENTS_NAME="";
 $ENROLLMENT_NO="";
 $EMAIL_ID="";
 $CONTACT_NO ="";
 
 //to prevent mysql injection
  $STUDENTS_NAME = mysqli_real_escape_string($db, $STUDENTS_NAME );
 $ENROLLMENT_NO = mysqli_real_escape_string($db, $ENROLLMENT_NO);
 $EMAIL_ID = mysqli_real_escape_string($db, $EMAIL_ID );
 $CONTACT_NO = mysqli_real_escape_string($db, $CONTACT_NO);
 
 //query the database for the user
 $result=mysqli_query($db, "select * from users")
             or die("Failed to query database" .mysqli_error());
 $row = mysqli_fetch_array($result);
 if ($row['STUDENTS_NAME']== $STUDENTS_NAME  && $row['ENROLLMENT_NO'] == $ENROLLMENT_NO && $row['EMAIL_ID'] == $EMAIL_ID && $row['CONTACT_NO'] == $CONTACT_NO)
 {
          	echo "login success!!! welcome TO COMPUTER DEAPARTMENT";
          } else {
          	echo "Failed to login";
          }
 ?>         
                  
<br />

