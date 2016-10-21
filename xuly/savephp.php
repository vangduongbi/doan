<html>
<head>
</head>
<body>

<?php
$tenmaychu="localhost";
$taikhoan="root";
$matkhau="raspberry";
$csdl="led";
$con= mysql_connect($tenmaychu,$taikhoan,$matkhau) or die("Ko the ket noi toi Database");
mysql_select_db($csdl,$con);

$stt=system("gpio -g read 18");

$sql="insert into oper(stt) values ($stt)";
mysql_query($sql);
?>

</body>
</html>