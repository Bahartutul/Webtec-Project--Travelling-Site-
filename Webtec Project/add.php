<!--?php
include("dbcon.php");
$sql=mysqli_query($con,"SELECT * FROM place");

$l=$_POST['loc'];
$i1=$_POST['i1'];
$i2=$_POST['i2'];
$i3=$_POST['i3'];
$i4=$_POST['i4'];
$d=$_POST['dspn'];
$p=$_POST['pak'];

$sql_add=mysqli_query($con,"INSERT into place VALUES ('$l', '$i1', '$i2', '$i3', '$i4', '$d', '$p')");
?-->
<!doctype html>
<html>
<head>
<?php
$msg="";
if(!isset($_POST['loc']))
$_POST['loc']="";
if(!isset($_POST['i1']))
$_POST['i1']="";
if(!isset($_POST['i2']))
$_POST['i2']="";
if(!isset($_POST['i3']))
$_POST['i3']="";
if(!isset($_POST['i4']))
$_POST['i4']="";
if(!isset($_POST['dspn']))
$_POST['dspn']="";
if(!isset($_POST['pak']))
$_POST['pak']="";
if(!isset($_POST['seat']))
$_POST['seat']="";
?>
</head>
<style>
body{
background-color:#0e85a0;
}

  .button {
    background-color:white;
    border: none;
    color: black;
    padding: 17px 45px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
input{
width:59%;
}
h1{
text-decoration:underline;
color:white;
}
.button2 {background-color: #f44336; color: black;padding:16px 20px;}
.button3 {background-color: #f44336;font-size: 16px;padding:16px 32px;}
.button4 {background-color: #white;font-size: 16px;padding:16px 20px;}
form{
margin:0 auto;
width:300px;
background-color:;
font-weight:bold
}
</style>
<!--script type="text/javascript">
function chk()
{
flag=true;
l=document.forms[0].loc.value;
i1=document.forms[0].i1.value;
i2=document.forms[0].i2.value;
i3=document.forms[0].i3.value;
i4=document.forms[0].i4.value;
d=document.forms[0].dspn.value;
p=document.forms[0].pak.value;
if(l=="" && i1=="" && i2=="" && i3=="" && i4=="" && d=="" && p=="")
{
document.getElementById("lerr").innerHTML="Location is required...";
document.getElementById("i1err").innerHTML="Image1 is required...";
document.getElementById("i2err").innerHTML="Image2 is required...";
document.getElementById("i3err").innerHTML="Image3 is required...";
document.getElementById("i4err").innerHTML="Image4 is required...";
document.getElementById("derr").innerHTML="Description is required...";
document.getElementById("perr").innerHTML="Package is reequired...";
}
else
{

}
}
</script-->
<body>
<script type="text/javascript">
function chk()
{

l=document.forms["0"].loc.value;
i1=document.forms["0"].i1.value;
i2=document.forms["0"].i2.value;
i3=document.forms["0"].i3.value;
i4=document.forms["0"].i4.value;
d=document.forms["0"].dspn.value;
p=document.forms["0"].pak.value;
s=document.forms["0"].seat.value;
if(l=="")
{
alert("Location is required...");
//document.getElementById["lerr"].innerHTML="Location is required...";

}
if(i1=="")
{
alert("Image1 is required...");
//document.getElementById["i1err"].innerHTML="Image1 is required...";

}
if(i2=="")
{
alert("Image2 is required...");
}
if(i3=="")
{
alert("Image3 is required...");
}
if(i4=="")
{
alert("Image4 is required...");
}
if(d=="")
{
alert("Description is required...");
}
if(p=="")
{
alert("Packages are required...");
}
if(s=="")
{
alert("Seat is required...");
}

}
</script>
<h1 align="center">&nbsp &nbsp &nbsp ADD LOCATION &nbsp &nbsp &nbsp</h1>
<form align="centre" method="post" action="">
<h2><pre align="center">
Location:   <input type="text" name="loc" <?php echo "value=".$_POST['loc'];?>>
Image1:     <input type="text" name="i1" <?php echo "value=".$_POST["i1"];?>> 
Image2:     <input type="text" name="i2" <?php echo "value=".$_POST["i2"];?>>
Image3:     <input type="text" name="i3" <?php echo "value=".$_POST["i3"];?>>
Image4:     <input type="text" name="i4" <?php echo "value=".$_POST["i4"];?>>
Description:<textarea name="dspn" style="height:100px;width:177px" <?php echo "value=".$_POST["dspn"];?>></textarea>
Package:    <textarea name="pak" style="height:100px;width:177px"<?php echo "value=".$_POST["pak"];?>></textarea>
Seat:       <input type="text" name="seat" <?php echo "value=".$_POST["seat"];?>>
<input type="submit" name="submit" value="Back" class="button button2" style="width:40%"><input type="submit" name="submit3" value="Refresh" class="button button4" style="width:40%"><input type="submit" value="Display" name="submit1" class="button button3" style="width:40%" >
&nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" value="Add" name="submit2" class="button" style="width:43%;" onclick="return chk()" >
</pre>

</h2>
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
if(isset($_POST["submit"]))
{
header("location:adminhome.php");
}
include("dbcon.php");
if(isset($_POST["submit2"]))
{
$l=$_POST['loc'];
$i1=$_POST['i1'];
$i2=$_POST['i2'];
$i3=$_POST['i3'];
$i4=$_POST['i4'];
$d=$_POST['dspn'];
$p=$_POST['pak'];
$s=$_POST['seat'];
if($l!="" &&
   $i1!="" &&
   $i2!="" &&
   $i3!="" &&
   $i4!="" &&
   $d!="" &&
   $p!="" &&
   $s!="" )
   {
$sql_add=mysqli_query($con,"insert into place values('$l', '$i1', '$i2', '$i3', '$i4', '$d', '$p', '$s')");

if($sql_add)
{
echo "<table align='center'>";
echo "<tr>";
echo "<td>"; echo "<h2 style='color:white'>1 Row Added Correctly.......</h2>"; echo "</td></tr>";
echo "</tr>";
echo "</table>";
}
}
if(isset($_POST['submit3']))
{
header("location:add.php");
}
}
?>

</body>
</html>