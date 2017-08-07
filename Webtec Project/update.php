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
<body>
<script type="text/javascript">

</script>
<?php
$l=$i1=$i2=$i3=$i4=$d=$p=$s="";
if(isset($_POST["back"]))
{
header("location:adminhome.php");
}

include("conjson.php");
$jsonData= getJSONFromDB("select * from place");

$jsn=json_decode($jsonData);
if(isset($_POST['details']))
{
  $l=$_POST['loc'];
  for($i=0;$i<sizeof($jsn);$i++)
  {
  if($l==$jsn[$i]->location)
  {
  $i1=$jsn[$i]->image;
  $i2=$jsn[$i]->image1;
  $i3=$jsn[$i]->image2;
  $i4=$jsn[$i]->image3;
  $d=$jsn[$i]->dspn;
  $p=$jsn[$i]->package;
  $s=$jsn[$i]->available_seat;
  
 
  }
  }
}


?>
<h1 align="center">&nbsp &nbsp &nbsp UPDATE LOCATION &nbsp &nbsp &nbsp</h1>
<form align="centre" method="post" action="">
<h2><pre align="center">
Location:   <input type="text" name="loc" <?php echo "value=".$l;?>>
Image1:     <input type="text" name="i1" <?php echo "value=".$i1;?>> 
Image2:     <input type="text" name="i2" <?php echo "value=".$i2;?>>
Image3:     <input type="text" name="i3" <?php echo "value=".$i3;?>>
Image4:     <input type="text" name="i4" <?php echo "value=".$i4;?>>
Description:<textarea name="dspn" rows="4" cols="50" style="height:100px; width:177px"><?php echo $d;?></textarea>
Package:    <textarea name="pak" style="height:100px; width:177px"><?php echo $p;?></textarea>
Seat:       <input type="text" name="seat" <?php echo "value=".$s;?>>
<input type="submit" name="back" value="Back" class="button button2" style="width:40%"><input type="submit" name="details" value="Get-Details" class="button button4" style="width:40%"><input type="submit" value="Display" name="display" class="button button3" style="width:40%" >
&nbsp &nbsp &nbsp &nbsp &nbsp <input type="submit" value="Update" name="update" class="button" style="width:43%;" onclick="return chk()" >
</pre>

</h2>
</form>
<?php
include("dbcon.php");
if(isset($_POST['update']))
{
$l=$_POST['loc'];
$i1=$_POST['i1'];
$i2=$_POST['i2'];
$i3=$_POST['i3'];
$i4=$_POST['i4'];
$d=$_POST['dspn'];
$p=$_POST['pak'];
$s=$_POST['seat'];
$sql=mysqli_query($con,"UPDATE place SET image='$i1',image1='$i2',image2='$i3',`image3`='$i4',dspn='$d',package='$p',available_seat='$s' WHERE location='$l'");
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
if(isset($_POST["display"]))
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
?>
</body>
</html>