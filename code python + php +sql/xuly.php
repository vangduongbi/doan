<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	

</head>
<body>
<?php
session_start();
$tenmaychu="localhost";
$taikhoan="root";
$matkhau="raspberry";
$csdl="doan";
$con= mysql_connect($tenmaychu,$taikhoan,$matkhau) or die("Ko the ket noi toi Database");
mysql_select_db($csdl,$con);
$_session['text']=$_session['text1']=$_session['text2']="";

	if (isset($_POST["on"])) {
		$sql="update onoff set enable=1";
		mysql_query($sql);
		echo $_POST['on'];

		
	}

	if (isset($_POST["off"])) {
		$sql="update onoff set enable=0";
		mysql_query($sql);
		echo $_POST['off'];

		# code...
	}
	
	if (isset($_POST["on1"])) {
		$sql="update onoff set luuthe=1";
		mysql_query($sql);
				echo $_POST['on1'];

	}

	if (isset($_POST["off1"])) {
		$sql="update onoff set luuthe=0";
		mysql_query($sql);
				echo $_POST['off1'];

		# code...
	}
	if (isset($_POST["on2"])) {
		$sql="update onoff set blink=1";
		mysql_query($sql);
			
		echo $_POST['on2'];
	}

	if (isset($_POST["off2"])) {
		$sql="update onoff set blink=0";
		mysql_query($sql);
				
		echo $_POST['off2'];
		# code...
	}
?>

	<form action="" method="post">
	<br>
		<input type="submit" name="on"  value="ONLED">
		<input type="submit" name="off" value="OFFLED">
		
	
		<br><br>
		<input type="submit" name="on1" value="Quet the">
		<input type="submit" name="off1" value="Dung quet">
			<?php
	
		?>
		<br><br>
		<input type="submit" name="on2" value="ON blink">
		<input type="submit" name="off2" value="OFF blink">
		
	</form>
	<br>
	</body>
</html>