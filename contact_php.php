<?php
// database connection code
if(isset($_POST['name']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', 'acersrh123','contact_db');

// get the post records

$txtName = $_POST['myname'];
$txtEmail = $_POST['mymail'];
$txtMessage = $_POST['Your_essage'];

// database insert SQL code
$sql = "INSERT INTO `contact_info` (`id`, `name`, `email`, `message`) VALUES ('0', '$txtName', '$txtEmail', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>
