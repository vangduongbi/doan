<?php
$severname="localhost";
$username="root";
$password="raspberry";
$dbname="doan";

$con= mysql_connect($severname,$username,$password) or die("Ko the ket noi toi Database");
mysql_select_db($dbname,$con);
?>