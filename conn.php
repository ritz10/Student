<!DOCTYPE HTML>
<html>
<head>
<title>THIRD YEAR COMPUTER STUDENTS DETAILS</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
<link rel="stylesheet" href="style2.css" type="text/css">
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
$host="localhost";
$user ="root";
$pass="";
$db_name="project1";
//create connection
$connection=mysqli_connect($host,$user,$pass,$db_name);
//check connection
if(mysqli_connect_errno())
{
    die("connection failed:"
    .mysqli_connect_errno()
    ."(".mysqli_connect_eerno()
    .")");

}
//get results from the database
$result=mysqli_query($connection,"SELECT * FROM users");
$all_property= array();
//showing property
echo'<table class="data-table table-striped table-responsive">
<tr class="data=heading text-center">';
while($property=mysqli_fetch_field($result)){
    echo'<td>' .$property->name .'</td>';
    array_push($all_property,$property->name);
}
echo'</tr>';
//showing all data
while($row=mysqli_fetch_array($result)){
    echo"<tr class=text-center>";
    foreach($all_property as $email){
        echo'<td>' .$row[$email].'</td>';

    }
    echo'</tr>';
}
echo"</table>";
?>
</body>
</html>