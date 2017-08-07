<?php
require_once("conjson.php");

$jsonData= getJSONFromDB("select * from admin");

$jsn=json_decode($jsonData);
if(isset($_POST['submit'])){
$u = $_POST['uname'];
$p = $_POST['pass'];
$found = false;
for($i=0;$i<sizeof($jsn);$i++){
	if($u==$jsn[$i]->name&&$p==$jsn[$i]->password){
		echo header("location:adminhome.php");
		$found = true;
		break;
	}
}

if($found==false){
      echo "<h2><span style='color:white'>Incorrect username & password....</span></h2></br>";
	}
	}
?>