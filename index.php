<!DOCTYPE html>
<html>
<head>

<script>
	  function on()
			  {
				 
				var xhttp=new XMLHttpRequest();

				xhttp.onreadystatechange=function(){
									if (xhttp.readyState == 4 && xhttp.status==200){
															
													   }
								};
																
								xhttp.open("GET", "xuly/onled.php",true);
								xhttp.send();
								console.log("ok");
		            }
 function off()
			  {
				 
				var xhttp=new XMLHttpRequest();

				xhttp.onreadystatechange=function(){
									if (xhttp.readyState == 4 && xhttp.status==200){
															
													   }
								};
																
								xhttp.open("GET", "xuly/offled.php",true);
								xhttp.send();
		            }

function check(){

var xhttp=new XMLHttpRequest();

				xhttp.onreadystatechange=function(){
									if (xhttp.readyState == 4 && xhttp.status==200){
 											document.getElementById("stt").innerHTML = this.responseText;
															
													   }
								};
																
								xhttp.open("GET", "xuly/check.php",true);
								xhttp.send();


}


function Savebypython(){

var xhttp=new XMLHttpRequest();

				xhttp.onreadystatechange=function(){
									if (xhttp.readyState == 4 && xhttp.status==200){
 																										
													   }
								};
																
								xhttp.open("GET", "xuly/save.php",true);
								xhttp.send();


}

function Savebyphp(){

var xhttp=new XMLHttpRequest();

				xhttp.onreadystatechange=function(){
									if (xhttp.readyState == 4 && xhttp.status==200){
 																										
													   }
								};
																
								xhttp.open("GET", "xuly/savephp.php",true);
								xhttp.send();


}

</script>
	<title>On off led</title>
</head>
<body>
	<input type="button" value="On" onclick="on()">
	<input type="button" value="Off" onclick="off()">
	<input type="button" value="Check" onclick="check()">
	<input type="button" value="luu bang python" onclick="Savebypython()"> 
	<input type="button" value="luu bang php" onclick="Savebyphp()"> 
	<div id="stt"></div>
</body>
</html>