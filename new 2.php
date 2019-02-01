<?php
<html>
<head>
<title>Students Details</title>
</head>
<body>
<table width="800" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>STUDENTS_NAME</th>
<th>ENROLLMENT_NO</th>
<th>CONTACT_NO</th>
<th>EMAIL_ID</th>
</tr>
<?php
 while($users=mysqli_fetch_assoc($records))
 {
	 echo "<tr>";
	 echo "<td>".$users['STUDENTS_NAME']."</td>";
	 echo "<td>".$users['ENROLLMENT_NO']."</td>";
	 echo "<td>".$users['EMAIL_ID']."</td>";
	 echo "<td>".$users['CONTACT_NO']."</td>";
	 echo "<tr>";
 }
 ?>
 </table
 </body>
 </html>
 ?>
 <table width="800" border="1" cellpadding="1" cellspacing="1">
<tr>
<th>STUDENTS_NAME</th>
<th>ENROLLMENT_NO</th>
<th>CONTACT_NO</th>
<th>EMAIL_ID</th>
</tr>
?>
<?php
  $query= mysqli_query("SELECT * from users");
                 
    while($row =  mysqli_fetch_array($query)){
		 $STUDENTS_NAME= $row['STUDENTS_NAME'];
         $ENROLLMENT_NO= $row['ENROLLMENT_NO'];
         $EMAIL_ID= $row['EMAIL_ID'];
         $CONTACT_NO = $row['CONTACT_NO'];
	echo $STUDENTS_NAME . ': '.$ENROLLMENT_NO. ': '.$EMAIL_ID .': '. $CONTACT_NO .'<br />';
	}	 
?>	