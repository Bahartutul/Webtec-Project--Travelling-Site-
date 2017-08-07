<!doctype html>
<html>
<body>

<?php
	require_once("conjsonp.php");
	
		$jsonData= getJSONFromDB("select * from place");

$jsn=json_decode($jsonData);
$l = $_GET['location'];

$found = false;

for($i=0;$i<sizeof($jsn);$i++){
	if($l==$jsn[$i]->location){
		echo "<img class='mySlides animate-fading' src='".$jsn[$i]->image."'  style='width:21.5%;position:relative;left:4%;border-radius:25px;'>";
		echo "<img class='mySlides animate-fading' src='".$jsn[$i]->image1."' style='width:22.5%;position:relative;left:5%;border-radius:25px;'>";
		echo "<img class='mySlides animate-fading' src='".$jsn[$i]->image2."' style='width:22.5%;position:relative;left:6%;border-radius:25px;'>";
		echo "<img class='mySlides animate-fading' src='".$jsn[$i]->image3."' style='width:22.5%;position:relative;left:7%;border-radius:25px;'><br>";
		
		echo "<h4><div  style='background-color:white;'>".$jsn[$i]->dspn."</div></h4>";
		echo "<h4><div style='background-color:white;width:300px;border: 25px solid green;padding: 25px;margin:25px;text-align:center;position:relative;left:33%;'>".$jsn[$i]->package."".$jsn[$i]->available_seat."</div></h4><br><br>";
		
		$found = true;
		break;
	}
}

if($found==false){
	echo "<h3><p style='color:white;text-align:center;'>Invalid place !</p></h3>";
}

	
	
	
/*	$str="";



if($_GET['q']=="read"){
	echo dbRead($_GET['location']);
   // echo $jsn;

}

else
	echo "invalid request";*/
	

?>
</body>
</html>