<?php
$nam=$_POST['name'];
$uid=$_POST['user'];
$pswrd=$_POST['pass'];
$mid=$_POST['mail'];
$pnum=$_POST['ph'];
$opt=$_POST['sel'];
$con=mysqli_connect('localhost','root');
if(!$con)
	echo "not connect";
else
	echo "connect";
mysqli_select_db($con,'register');
$q="insert into regform (uname,name,password,mail_id,phno,sel) values ('$uid','$nam','$pswrd','$mid',$pnum,'$opt')";
$status=mysqli_query($con,$q);
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
<title>reg form</title>
<style>
#status
{
	text-align:center;
}
</style>
</head>
<body>
<p>
 <?php
 if($status==1)
	  echo "You're registered successfully! <a href=\"LoginForm.html\">Go to login</a>";
  else
	  
	  echo "not registered";
  ?>
  </p>
</body>
</html>