<?php
session_start();
$user=$_POST['usr'];
$pd=$_POST['Password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'register');
$q="select uname,password,name from regform where uname='$user' && password='$pd'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
if($num==1)
{
	$_SESSION['username']=$row['name'];
	header('location:http://localhost/MAD/ChooseCourse.php');
}
else
{
	header('location:http://localhost/MAD/loginForm.html');
}
mysqli_close($con);
?>
