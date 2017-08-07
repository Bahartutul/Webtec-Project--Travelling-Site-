 <?php

$hostname="localhost";
$username="root";
$password="";

$con= mysqli_connect($hostname,$username,$password,"webproject");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
