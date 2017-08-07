<!doctype html>
<html>
<head>
<style>
p{
  position:relative;
  left:18%; 
  font-weight:bold;
  background-color:gray ;
  width:800px ;
  margin:20px;
  border-radius:25px;
  
padding:7px;
  
  }
  body{
    background-color:white;
  }
  div{
  border-style:line;
  position:relative;
  left:18%;
  }
  h2{
  
  text-decoration:underline;
  }
  h4{
  text-align:right;
  }
  span{
  font-size:18px;
  color:green;
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
.button6 {background-color: #2dbc09;font-size: 16px;padding:8px 20px;}

</style>



</head>
<body>
<script type="text/javascript">
function showHint() {
	str=document.getElementById('place').value;
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			document.getElementById("dspn").innerHTML = xmlhttp.responseText;
			
			
			document.getElementById("image").src=xmlhttp.responseText;
		}
	};
	var url="dbjsonp.php?q=read&location="+str;
	//alert(url);
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}
</script>
<p>&nbsp <a href="home.php" class="button">HOME</a> &nbsp &nbsp <a href="place.php" class="button button2">PLACES</a> &nbsp &nbsp <a href="" class="button button3">FACILITIES</a> &nbsp &nbsp <a href="offer.php" class="button button4">RUNNING PACKAGE</a> &nbsp &nbsp <a href="userinfo.php" class="button button5">BOOKING</a>
<p><input type="text" id="place" name="loc" style="width:85%;height:30px"> <input type="submit" value="Search" class="button button6" onclick="showHint()"></p><br>
<span id="dspn"></span>
<h2><a href="userinfo.php" style="color:green">Click Here for booking.....</a></h2>

</body>
</html>






