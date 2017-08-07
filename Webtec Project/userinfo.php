<!doctype html>
<html>
<head>
<style>
p{
  position:relative;
  left:18%; 
  font-weight:bold;
  background-color:gray  ;
  width:800px ;
  margin:20px;
  border-radius:25px;
  
padding:7px;
  
  }
pre{
color:;
}
form{
position:relative;
left:35%;

width:420px;
background-color:;
font-weight:bold;
color:gray;
}
body{
background-color:white;
}
h1{
color:#008CBA;
text-decoration:underline;
}
div {
  position:relative;
  left:18%; 
    background-color: lightgrey;
    width: 650px;
    border: 25px solid green;
    padding: 25px;
    margin: 25px;
	text-align:center;
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
.button6 {background-color: white;color:black;font-size: 16px;padding:8px 20px;}

</style>
</head>
<body>
<?php
session_start();

		if(!isset($_POST["fname"]))
			
		$_POST["fname"] = "";
		
			
		if(!isset($_POST["lname"]))
			$_POST["lname"] = "";
	
		
		if(!isset($_POST["date"]))
		  $_POST["date"]="";
		  if(!isset($_POST["month"]))
		  $_POST["month"]="";
		  if(!isset($_POST["year"]))
		  $_POST["year"]="";
          if(!isset($_POST["gender"]))
		  $_POST["gender"]="";
		  if(!isset($_POST["pdate"]))
			$_POST["pdate"]="";
		  if(!isset($_POST["phone"]))
			$_POST["phone"] = "";
		if(!isset($_POST["email"]))
			$_POST["email"] = "";
			if(!isset($_POST["padd"]))
			$_POST["padd"]= "";
			if(!isset($_POST["loc"]))
			$_POST["loc"]="";
		?>
<script type="text/javascript">
 
 

function chk(){
f=document.forms[0].fname.value;
 l=document.forms[0].lname.value;
 d=document.forms[0].date.value;
 m=document.forms[0].month.value;
 y=document.forms[0].year.value;
 g=document.forms[0].gender.value;

 p=document.forms[0].phone.value;
 e=document.forms[0].email.value;
 pa=document.forms[0].padd.value;
 lo=document.forms[0].loc.value;
	flag=true;
	if(f==""){
	alert("Firstname is required....");
		return false;
	}
	if(l=="")
	{
	alert("Lastname is required....");
	return false;
	}
	if(d=='')
	{
	alert("Date is required....");
	return false;
	}
	if(m=='null')
	{
	alert("Month is required....");
	return false;
	}
	if(y=='null')
	{
	alert("Year is required....");
	return false;
	}
	if(g!="Male" && g!="Female")
	{
	alert("Gender is required.....");
	return true;
	}
	if(p=="")
	{
	alert("Phone number is requiored....");
	return false;
	}
	if(e=="")
	{
	alert("Email is requiored....");
	return false;
	}
	if(pa=="")
	{
	alert("Present address is requiored....");
	return false;
	}
	if(lo=="")
	{
	alert("Location is required....");
	return false;
	}
 /* if(flag==true)
   {
   alert("Submitting done....");
   
   return true;
   }*/
}
function emailvalidation()
{

	e=document.forms[0].email.value;
	if((!e.match("@")) || (!e.match(".com")))
	{
       document.getElementById("eerr").innerHTML="<span style='color:#f44336'>Invalid Email pls write>>Gmail<< formate</span>";
     
	}
else
		{
		document.getElementById("eerr").innerHTML="";
		}


}

function locationvalidation() {
	str=document.getElementById('place').value;
	//document.getElementById("spinner").style.visibility= "visible";
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("lerr").innerHTML = xmlhttp.responseText;
			
		}
	};
	var url="dbjsonp.php?q=read&location="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}

function numvalidation()
{
p=document.forms[0].phone.value.length;
if(p!=11)
{
document.getElementById("perr").innerHTML="<span style='color:#f44336'>Must be contain 11digit....</span>";
}
else
{
document.getElementById("perr").innerHTML="";
}
}
</script>
<p style="">&nbsp <a href="home.php" class="button">HOME</a> &nbsp &nbsp <a href="place.php" class="button button2">PLACES</a> &nbsp &nbsp <a href="" class="button button3">FACILITIES</a> &nbsp &nbsp <a href="offer.php" class="button button4">RUNNING OFFER</a> &nbsp &nbsp <a href="userinfo.php" class="button button5">BOOKING</a>
<form action="" method="post">
<h1>&nbsp &nbsp &nbsp Traveller Information &nbsp &nbsp &nbsp</h1>
<h2><pre>
First name:<input type="text" name="fname" <?php echo "value=".$_POST['fname']; ?>>
Last name :<input type="text" name="lname" <?php echo "value=".$_POST['lname']; ?>>
</pre>
 Date Of Birth:<br> 
 Date:<select type="Day" style="height:30px;" name="date" <?php echo "value=".$_POST['date'];?>>
         <option value="">-select-</option></h3>
 <?php
               for($day = 1; $day < 32; $day++)	
			   {
					echo "<option value='".$day."'";
					if($day == $_POST["date"])
						echo " selected='selected'";
					echo ">".$day."</option>";
				}
          
 ?>
 
 </select>
 Month:<select type="month" style="height:30px;" name="month">
       <option value="null">-select-</option>
 <?php
               for($month = 1; $month < 13; $month++)	
			    {
					echo "<option value='".$month."'";
					if($month == $_POST["month"])
						echo " selected='selected'";
					echo ">".$month."</option>";
				}
 ?>
 </select>
 Year:<select type="year" style="height:30px;" name="year">
     <option value="null">-select-</option>
 <?php
 				for($year = 1970; $year < 2010; $year++)	
				{
					echo "<option value='".$year."'";
					if($year == $_POST["year"])
						echo " selected='selected'";
					echo ">".$year."</option>";
				}
 ?>
 </select>
 </br>
 Gender:<br>
            <input name="gender" type="radio" value="Male" <?php if($_POST["gender"] == "Male") echo "checked"; ?>>Male</br>
			<input name="gender" type="radio" value="Female" <?php if($_POST["gender"] == "Female") echo "checked"; ?>>Female</br>
<pre>
    Present date:<input type="text" name="pdate" readonly <?php  date_default_timezone_set("Indian/Chagos");echo "value=".date("d/m/Y");?>>
    Phone number:<input type="text" name="phone"  onkeyup="numvalidation()" <?php echo "value=".$_POST['phone']; ?>> <span id="perr" ></span>
   Email address:<input type="text" name="email"  onkeyup="emailvalidation()" <?php echo "value=".$_POST['email']; ?> > <span id="eerr" ></span>
 present address:<input type="text" name="padd" <?php echo "value=".$_POST['padd']; ?>>
Booking location:<input type="text" name="loc" id="place" onkeyup="locationvalidation()" <?php echo "value=".$_POST['loc'];?>> </pre>
<br><input type="submit" value="Submit" onclick=" chk()" class="button button2 "></h2>

</form>
<h3><span id="lerr" style="color:green" ></span></h3>
<?php
include("dbcon.php");

if($_POST["fname"]!="" &&
   $_POST["lname"]!="" &&
   $_POST["date"]!=""  &&
   $_POST["month"]!="" &&
   $_POST["year"]!=""  &&
   $_POST["gender"]!=""&&
   $_POST["pdate"]!="" &&
   $_POST["phone"]!="" &&
   $_POST["email"]!="" &&
   $_POST["padd"]!= "" &&
   $_POST["loc"] !="" )
   {
   $sql2=mysqli_query($con,"select * from place  WHERE location='$_POST[loc]'");
while($row=mysqli_fetch_array($sql2)){
if($row['available_seat']!=0){
$sql = "INSERT INTO userinfo(First_Name, Last_Name, Birth_Date, Birth_Month, Birth_Year, Gender, Booking_Date, Phone, Email, Present_Address,Location,Action) 
VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[date]', '$_POST[month]', '$_POST[year]', '$_POST[gender]', '$_POST[pdate]', '$_POST[phone]', '$_POST[email]', '$_POST[padd]', '$_POST[loc]', 'Pending')";
if (mysqli_query($con, $sql))
{
$sql1=mysqli_query($con,"UPDATE place SET available_seat='$row[available_seat]'-'1' WHERE location='$_POST[loc]'");
$sql=mysqli_query($con,"select * from userinfo where First_Name='$_POST[fname]' and Last_Name='$_POST[lname]' and Phone='$_POST[phone]'");
 while($row=mysqli_fetch_array($sql))
 {
echo "<h2 style='text-align:center;color:White;'>Submitting Done...<br>Hello ".$row['First_Name']." ".$row['Last_Name']." Your serial number is=".$row['Serial']."</h2>";
}
}
}
/*$sql2=mysqli_query($con,"select * from place  WHERE location='$_POST[loc]'");
while($row=mysqli_fetch_array($sql2))*/

//if($row['available_seat']!=0)

//$sql1=mysqli_query($con,"UPDATE place SET available_seat='$row[available_seat]'-'1' WHERE location='$_POST[loc]'");

else
{
echo "<h2 style='text-align:center;color:White;'>Booking full...Please try again later</h2>";
}

}
/* else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);

	}*/
	
//mysqli_close($con);
}
?>
</body>
</html>