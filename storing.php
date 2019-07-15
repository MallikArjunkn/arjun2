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
$em=$_POST['Email'];
$mo=$_POST['mobilenumber'];

$q ="select * from example1 where name='$nam' && password='$pass' && email='$em' && phone='$mo'";
$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);
if($num == 1)
{
	echo" user already exist";

}
else
{
	$in=" insert into example1(name,password,email,phone) values('$nam','$pass','$em','$mo')";
	mysqli_query($con,$in);
	header('location:login.php');

}
?>