<!DOCTYPE html>
<html>
<head>
  <title>Wellcome</title>
  <script src="jquery-3.1.1.min.js"></script>
	<script>
      $(document).ready(function() {
 	 $("#temp_txt").load("controllers/temp.php");
   var refreshId = setInterval(function() {
      $("#temp_txt").load('controllers/temp.php');
   }, 100);

   $.ajaxSetup({ cache: false });
});
</script>


</head>
<body>
     <div id="temp_txt" style="height:50px;"></div>  <!-- end div temp_txt-->
        <h2><a href = "controllers/logout.php">Sign Out</a></h2>
     
  
  

<?php
	require_once("config/connect.php");
	require_once("controllers/session.php");

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
   
    <br><br>
    <input type="submit" name="on2" value="ON blink">
    <input type="submit" name="off2" value="OFF blink">
    
  </form>
  <br>
  </body>
</html>
