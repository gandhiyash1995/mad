	<?php
session_start();
if(!isset($_SESSION['username']))
	
 header('location:http://localhost/MAD/LoginForm.html');
?>
<html>
<head>
<style> 
input[type=text] {
    width: 25%;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 4px;
    transition: width 0.6s ease-in-out;
}

input[type=text]:focus {
    width: 50%;
}
p
{
    text-align:center;
    margin-top:3%;
}
#button{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 5px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 0%;
    transition-duration: 0.1s;
    cursor: pointer;
}
#button:hover {
   background-color:white;
    color: black;
    border: 2px solid #555555;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery-ui.js"></script>
<script>
function validateMyForm()
{
 if(document.getElementById("in").value=="")
  {
    alert("your search is empty");
    return false
  }
  else 
   return true;
}


</script>
<body bgcolor="#e9e9e9">
    <p><a href="ChooseCourse.php"><img style="height:12% ; width:5%;" src="http://localhost/MAD/images/left.png"></a></p>
  <p style="font-size:20px;"><i>Cooking is at once child's play and adult joy. And cooking done with care is an act of love</i></p>.

<form align="center" action="Cooking.php" method="post" onsubmit="return validateMyForm();"> 
  <input type="text" id="in" name="search"  placeholder="Search course" ><br><br>
  <input type="submit" id="button" value="find">
  </form>
   
</body>
</html>