<?php
session_start();
if(!isset($_SESSION['username']))
	
 header('location:http://localhost/MAD/LoginForm.html');
?>
<html>
    <head>
        <style>
        #button1{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin-left: 60%;
    transition-duration: 0.1s;
    cursor: pointer;
    
}
 #button2{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin-left: -20%;
    cursor: pointer;
     transition-duration: 0.3s;
    
}
   #button3{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin-left: 60%;
        margin-top: -30%;
         transition-duration: 0.3s;
    cursor: pointer;
    
}
   #button4{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin-left: -20%;
    margin-top: -30%;
    cursor: pointer;
     transition-duration: 0.3s;
}
#button1:hover {
    background-color:white;
    color: black;
    border: 2px solid #555555;
}
#button2:hover {
    background-color:white;
    color: black;
    border: 2px solid #555555;
}
#button3:hover {
    background-color:white;
    color: black;
    border: 2px solid #555555;
}
#button4:hover {
   background-color:white;
    color: black;
    border: 2px solid #555555;
}
#div0
{
margin-top:0%;
    margin-left:3%;
height:10%;
width:100%;
float:left;    
}

#div1
{margin-top:0%;
    margin-left:10%;
height:20%;
width:40%;
float:left;
}
#div2
{margin-top:0%;
     margin-left:10%;
height:20%;
width:40%;
float:left;
}
#div3
{
     margin-left:10%;
     margin-top:10%;
height:20%;
width:40%;
float:left;
}
#div4
{margin-top:10%;
     margin-left:10%;
height:20%;
width:40%;
float:left;
}
#text
{
margin-left:35%;
color:green;
FONT-SIZE:20PX;
}
#log
{
	margin-top:0%;
     margin-left:80%;
height:9%;
width:20%;
float:left;
}
#log1{
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20PX;
        margin-top: 10%;
         transition-duration: 0.3s;
    cursor: pointer;
    
}
#log1:hover
 {
    background-color:white;
    color: black;
    border: 2px solid #555555;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript" src="js/jquery-ui.js"></script>
	<script>
 $(document).ready(function()
 {
   
     $("#div0").slideDown(600);
      $("#para").slideDown(500);

		});
		</script>
        </head>
        <body bgcolor="#e9e9e9">
		<div id="log" ><a href="logout.php"><p id="log1">Logout</p></a></div>
            <div id="div0" style="display:none;"><p id="text"><b>Hi! <?php echo $_SESSION['username'];?>, Welcome to Course Finder app<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            Choose your field!<b></p></div>
            <div id="div1"><a href="BussinessForm.php"><p id="button1">Business</p></a></div>
            <div id="div2"><a href="EnggForm.php"><p id="button2">Engineering</p></a></div>
            <div id="div3"><a href="CookingForm.php"><p id="button3">Cooking</p></a></div>
            <div id="div4"><a href="M & DForm.php"><p id="button4">Music & Dance</p></a></div>
            <p id="para" style="display:none;"><a href="LoginForm.html"><img style="height:12% ; width:5%; margin-left:45%; margin-top:-15%;" src=" http://localhost/MAD/images/left.png"></a></p>
            </body>
            </html>

