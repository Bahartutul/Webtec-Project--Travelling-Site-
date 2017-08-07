<!doctype html>
<html>
<style>
body{
background-color:#0e85a0;
}
  .button {
    background-color:white;
    border: none;
    color: black;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
h1{
text-decoration:underline;
color:white;
}
.button1 {background-color: #f44336;padding:16px 32px;} 
.button2 {background-color: #d82750; color: black;padding:16px 32px;}
.button3 {background-color: green;font-size: 16px;padding:16px 32px;}
</style>
<body>
<?php
if(!isset($_POST['loc']))
$_POST['loc']="";
?>
<script type="text/javascript">
function chk()
{

l=document.forms["0"].loc.value;
if(l=="")
{
//document.getElementById["lerr"].innerHTML="Location is required...";
alert("Enter the location...");
}
}
</script>
<form action="" method="post" >
<h1 align="center">DELETE LOCATION</h1>
<h2><table align="center">
<tr><td>Location:<input type="text" name="loc" style="width:70%" <?php echo "value=".$_POST['loc'];?>><span id="lerr"></span>
<tr><td><input type="submit" name="submit" value="Back" class="button button1"><input type="submit" name="submit1" value="Search" onclick="return chk()" class="button"><input type="submit" name="submit2" value="Delete" onclick="return chk()" class="button button2"><input type="submit" name="submit3" value="Display" class="button button3"></td></tr>
</table></h2>
</form>
<table align="center" border="1" width="1000" style="background-color:white">
<thead>
<th>Location</th>
<th>Image1</th>
<th>Image2</th>
<th>Image3</th>
<th>Image4</th>
<th>Description</th>
<th>Package</th>
<th>Available Seat</th>
</thead>
<?php

include("dbcon.php");
if(isset($_POST["submit1"]))
{
$sql=mysqli_query($con,"select * from place where location='$_POST[loc]'");

while($row=mysqli_fetch_array($sql))
{
echo "<tr>";
echo "<td>"; echo $row['location']; echo "</td>";
echo "<td>"; echo $row['image']; echo "</td>";
echo "<td>"; echo $row['image1']; echo "</td>";
echo "<td>"; echo $row['image2']; echo "</td>";
echo "<td>"; echo $row['image3']; echo "</td>";
echo "<td>"; echo $row['dspn']; echo "</td>";
echo "<td>"; echo $row['package']; echo "</td>";
echo "<td>"; echo $row['available_seat']; echo "</td>";
echo "</tr>";
}
echo "</table>";
}

if(isset($_POST["submit2"]))
{
$l=$_POST['loc'];
if($l!=""){
$sql=mysqli_query($con,"delete from place where location='$_POST[loc]'");
if($sql)
{
echo "<table align='center'>";
echo "<tr>";
echo "<td>"; echo "<h2 style='color:white'>1 Row Delete Succesfully.......</h2>"; echo "</td></tr>";
echo "</tr>";
echo "</table>";
}
else
{
   echo "Error".mysql_error($con);
}
}
}
if(isset($_POST["submit3"]))
{
$sql=mysqli_query($con,"select * from place");

while($row=mysqli_fetch_array($sql))
{
echo "<tr>";
echo "<td>"; echo $row['location']; echo "</td>";
echo "<td>"; echo $row['image']; echo "</td>";
echo "<td>"; echo $row['image1']; echo "</td>";
echo "<td>"; echo $row['image2']; echo "</td>";
echo "<td>"; echo $row['image3']; echo "</td>";
echo "<td>"; echo $row['dspn']; echo "</td>";
echo "<td>"; echo $row['package']; echo "</td>";
echo "<td>"; echo $row['available_seat']; echo "</td>";
echo "</tr>";
}
echo "</table>";
}
if(isset($_POST['submit']))
{
header("location:adminhome.php");
}
?>
</body>
</html>
