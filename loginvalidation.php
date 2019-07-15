<?php
session_start();


$con =mysqli_connect('localhost','root');
if($con)
{
	echo"";

}
else{
	echo"connection is not successful";
}
mysqli_select_db($con,'arjunphp');
$nam=$_POST['username'];
$pass=$_POST['password'];


$q ="select * from example1 where name='$nam' && password='$pass'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1)
{
	$_SESSION['BGHJ']=$nam;
	header('location:home.php');
	
}
else
{
	echo" The entered detils are wrong";
}
?>