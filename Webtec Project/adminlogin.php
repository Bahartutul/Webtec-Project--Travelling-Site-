<!doctype html>
<html>
<head>
<style>
body{
background-color:#0e85a0;
}
form{
margin:0 auto;
width:300px;
background-color:;
font-weight:bold;
}
span{
color:white;
}
h1{
color:white;
text-align:center;
text-decoration:underline;
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
</style>
<script type="text/javascript">
function chk()
{
flag=true;
u=document.forms[0].uname.value;
p=document.forms[0].pass.value;
if(u=="" && p=="")
{
document.getElementById("uerr").innerHTML="Username is required.....";
document.getElementById("perr").innerHTML="Password is required.....";
return false;
} 
if(p=="" )
{
document.getElementById("uerr").innerHTML="";

document.getElementById("perr").innerHTML="Password is required.....";
return false;
}
if(u=="")
{
document.getElementById("uerr").innerHTML="Username is required.....";
document.getElementById("perr").innerHTML="";
return false;
}
}

</script>
</head>
<body>
<?php

        if(!isset($_POST["uname"]))	
		$_POST["uname"] = "";
		if(!isset($_POST["pass"]))
			$_POST["pass"] = "";
?>
<form action="" method="post">
<h1>LOGIN</h1>
<h2><pre>
User Name :<input type="text" name="uname"> <span id="uerr"></span> 
 Password :<input type="password" name="pass" /> <span id="perr"></span> </h2> 
<?php
include "dbjson.php";
?> 
<input type="submit" name="submit" value="Login" onclick="return chk() " class="button"/><br>
</pre>

</form>

</body>
</html>