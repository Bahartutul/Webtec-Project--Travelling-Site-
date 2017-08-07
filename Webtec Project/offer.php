<!doctype html>
<html>
<style>
div {
  position:relative;
  left:18%; 
    background-color: lightgrey;
    width: 650px;
    border: 25px solid green;
    padding: 25px;
    margin: 25px;
	text-align:center;
	height:100px;
}
h2{
text-decoration:underline;
color:green;
text-align:center;
}
p{
  position:relative;
  left:17%; 
  font-weight:bold;
  background-color:gray ;
  width:800px ;
  margin:20px;
  border-radius:25px;
  
padding:7px;
  
  }
 
  .button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 17px 35px;
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
<body>
<p><a href="home.php" class="button">HOME</a> &nbsp &nbsp <a href="place.php" class="button button2">PLACES</a> &nbsp &nbsp <a href="" class="button button3">FACILITIES</a> &nbsp &nbsp <a href="offer.php" class="button button4">RUNNING PACKAGE</a> &nbsp &nbsp <a href="userinfo.php" class="button button5">BOOKING</a>
<h2>&nbsp &nbsp &nbsp RUNNING PACKAGES &nbsp &nbsp &nbsp</h2>

<?php
include("dbcon.php");
$sql=mysqli_query($con,"select * from place");
while($row=mysqli_fetch_array($sql))
{
echo "<h2><div  style='background-color:white;'>".$row['location']."<br>".$row['package']."".$row['available_seat']."</div></h2>";
/*<div  style='background-color:white;'></div>
<div  style='background-color:white;'></div>
<div  style='background-color:white;'></div>
<div  style='background-color:white;'></div>*/
}
?>
<h2><a align="center" href="place.php" class="button">To see details click here...</a></h2>
</body>
</html>