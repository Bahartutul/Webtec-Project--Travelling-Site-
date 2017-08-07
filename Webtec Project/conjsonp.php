<?php

function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","webproject");
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);

}
function dbRead($v){
	$conn = mysqli_connect("localhost", "root", "","webproject");
	$sql = "SELECT * FROM place where location='".$v."'";
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$c=0;
	while($row = mysqli_fetch_assoc($result)) {
		$c=$row["dspn"];
	}
	mysqli_close($conn);
	return $c;
	
	/*$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);*/
}

?>