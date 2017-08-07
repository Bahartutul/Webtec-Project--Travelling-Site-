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
$a=$s="";
if(!isset($_POST['s']))
$_POST['s']="";

if(!isset($_POST['a']))
$_POST['a']="";

if(!isset($_POST['l']))
$_POST['l']="";
?>
<script type="text/javascript">
function chk()
{

s=document.forms["0"].s.value;
if(l=="")
{
//document.getElementById["lerr"].innerHTML="Location is required...";
alert("Enter the Serial number...");
}
}
</script>
<h1 align="center">&nbsp &nbsp &nbsp BOOKING DETAILS &nbsp &nbsp &nbsp</h1>
<form action="" method="post" >
<h2><table align="center">
<tr><td>Location:<input type="text" name="l" style="width:70%" ></td></tr>
<tr><td>Serial: &nbsp &nbsp <input type="text" name="s" style="width:70%" ></td></tr><span id="lerr"></span>
<tr><td>Action:&nbsp &nbsp <input type="text" name="a" style="width:70%" ></td></tr>
<tr><td><input type="submit" name="back" value="Back" class="button button1"><input type="submit" name="search" value="Search" onclick="return chk()" class="button"><input type="submit" name="update" value="Update" onclick="return chk()" class="button button2"><input type="submit" name="display" value="Display" class="button button3"></td></tr>
</table></h2>
</form>
<table align="center" border="1" width="1000" style="background-color:white">
<thead>
<th>Serial</th>
<th>First Name</th>
<th>Last Name</th>
<th>Birth Date</th>
<th>Birth Month</th>
<th>Birth Year</th>
<th>Gender</th>
<th>Booking Date</th>
<th>Phone</th>
<th>Email</th>
<th>Present Address</th>
<th>Location</th>
<th>Action</th>

<?php

include("dbcon.php");

if(isset($_POST['display'])){
$sql=mysqli_query($con,"select * from userinfo");

while($row=mysqli_fetch_array($sql))
{
echo "<tr>";
echo "<td>"; echo $row['Serial']; echo "</td>";
echo "<td>"; echo $row['First_Name']; echo "</td>";
echo "<td>"; echo $row['Last_Name']; echo "</td>";
echo "<td>"; echo $row['Birth_Date']; echo "</td>";
echo "<td>"; echo $row['Birth_Month']; echo "</td>";
echo "<td>"; echo $row['Birth_Year']; echo "</td>";
echo "<td>"; echo $row['Gender']; echo "</td>";
echo "<td>"; echo $row['Booking_date']; echo "</td>";
echo "<td>"; echo $row['Phone']; echo "</td>";
echo "<td>"; echo $row['Email']; echo "</td>";
echo "<td>"; echo $row['Present_Address']; echo "</td>";
echo "<td>"; echo $row['Location']; echo "</td>";
echo "<td>"; echo $row['Action']; echo "</td>";
echo "</tr>";
}
echo "</table>";
}
include("dbcon.php");

if(isset($_POST['search']))
{
if($_POST['s']!="")
{
$sql=mysqli_query($con,"select * from userinfo where Serial='$_POST[s]'");
if($sql)
{
while($row=mysqli_fetch_array($sql))
{
echo "<tr>";
echo "<td>"; echo $row['Serial']; echo "</td>";
echo "<td>"; echo $row['First_Name']; echo "</td>";
echo "<td>"; echo $row['Last_Name']; echo "</td>";
echo "<td>"; echo $row['Birth_Date']; echo "</td>";
echo "<td>"; echo $row['Birth_Month']; echo "</td>";
echo "<td>"; echo $row['Birth_Year']; echo "</td>";
echo "<td>"; echo $row['Gender']; echo "</td>";
echo "<td>"; echo $row['Booking_date']; echo "</td>";
echo "<td>"; echo $row['Phone']; echo "</td>";
echo "<td>"; echo $row['Email']; echo "</td>";
echo "<td>"; echo $row['Present_Address']; echo "</td>";
echo "<td>"; echo $row['Location']; echo "</td>";
echo "<td>"; echo $row['Action']; echo "</td>";
echo "</tr>";
}
echo "</table>";
}
}
if(isset($_POST['l']) && $_POST['s']==="")
{
$sql1=mysqli_query($con,"select * from userinfo where Location='$_POST[l]'");
if($sql1)
{
while($row=mysqli_fetch_array($sql1))
{
echo "<tr>";
echo "<td>"; echo $row['Serial']; echo "</td>";
echo "<td>"; echo $row['First_Name']; echo "</td>";
echo "<td>"; echo $row['Last_Name']; echo "</td>";
echo "<td>"; echo $row['Birth_Date']; echo "</td>";
echo "<td>"; echo $row['Birth_Month']; echo "</td>";
echo "<td>"; echo $row['Birth_Year']; echo "</td>";
echo "<td>"; echo $row['Gender']; echo "</td>";
echo "<td>"; echo $row['Booking_date']; echo "</td>";
echo "<td>"; echo $row['Phone']; echo "</td>";
echo "<td>"; echo $row['Email']; echo "</td>";
echo "<td>"; echo $row['Present_Address']; echo "</td>";
echo "<td>"; echo $row['Location']; echo "</td>";
echo "<td>"; echo $row['Action']; echo "</td>";
echo "</tr>";
}
echo "</table>";
}
}
}
if(isset($_POST['back']))
{
header("location:adminhome.php");
}



include("dbcon.php");
if(isset($_POST['update']))
{
$s=$_POST['s'];
$a=$_POST['a'];

$sql=mysqli_query($con,"UPDATE userinfo SET Action='$a' WHERE Serial='$s'");
if($sql)
{
echo "<h2 style='color:white;text-align:center;'>1row updated successfully...</h2>";
}
else
{
echo "Error:".mysqli_error($sql);
}
}
?>
</thead>
</body>
</html>