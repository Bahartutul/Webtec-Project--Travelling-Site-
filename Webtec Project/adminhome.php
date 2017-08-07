<!doctupe html>
<html>
<head>
<style>
h1{
text-align:center;
<!--text-decoration:underline;-->
color:white;

padding:6px;
}
pre{
    text-align:center;
	font-size:150%;
	}
p{
  position:relative;
  left:18%; 
  font-weight:bold;
  background-color:white  ;
  width:800px ;
  margin:20px;
  border-radius:25px;
  
padding:7px;
  
  }
  body
  {
  background-image:url("hi.jpg");
  }
  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 17px 45px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button2 {background-color: #008CBA;
          padding:16px 32px;
         }
.button3 {background-color: #f44336;padding:16px 32px;} 
.button4 {background-color: #d82750; color: black;padding:16px 20px;}
.button5 {background-color: #555555;font-size: 16px;padding:16px 20px;}
</style>
</head>
<body>
<form method="post">
<span style="position:relative;left:80%;"><input type="submit" name="logout" value="LOG OUT" class="button"></span></form>
<h1 style="color:white; text-decoration:underline">WELCOME TO ADMIN PORTAL</h1>
<p> &nbsp &nbsp &nbsp <a href="add.php" class="button">ADD</a> &nbsp &nbsp <a href="delete.php" class="button button2">DELETE</a> &nbsp &nbsp <a href="update.php" class="button button3">UPDATE</a> &nbsp &nbsp <a href="booking.php" class="button button3">BOOKING</a> &nbsp &nbsp <a href=""class="button button4">TRIP_DATA</a></p>

<?php
if(isset($_POST['logout']))
{
header("location:adminlogin.php");
}
?>


</body>
</html>