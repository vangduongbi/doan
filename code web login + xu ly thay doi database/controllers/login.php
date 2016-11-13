<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.js">

	<title>Login</title>
</head>
<body>
<?php
	$error="";
	$severname="localhost";
	$username="root";
	$password="raspberry";
	$dbname="doan";
	
	$conn = new mysqli($severname,$username,$password,$dbname);
	if($conn->connect_error){
	die("Connect failed:". $conn->connect_error);
	}
	session_start();
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{

         // $myusername = mysqli_real_escape_string($conn,$_POST['username']);
         // $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
	$myusername = $_POST['username'];
	$mypassword  = $_POST['password'];
          $sql = "SELECT id FROM admin WHERE user = '$myusername' and passcode = '$mypassword'";
          $result = mysqli_query($conn,$sql);
          $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
          // $active = $row['active'];
      
          $count = mysqli_num_rows($result);
      
         if($count == 1) {

              $_SESSION['login_user'] = $myusername;
         
              header("location: ../index.php");
          }
	else {
              $error = "Sai user hoặc mật khẩu vui lòng nhập lại";
      }
     

	}
?>
<div class="container">
	<div class="wrap" style="width:500px;background: hsla(0, 100%, 90%, 0.3);
margin:20px auto;border:1px solid #ddd;padding:50px 30px;border-radius:10px">
			<form action="" method="post">
				<h2 class="text-center" style="color:#31708f"> Login</h2>
				<div class="form-group">
					<label for="user">User:</label>
					<input class="form-control" placeholder="Username" type="text" name="username" id="user">
				</div> <!--end form-group-->
				<div class="form-group">
					<label for="password">Password:</label>
					<input class="form-control" type="password" placeholder="Password" name="password" id="password">
					<input style="margin:20px 0 0 363px;padding:10px 20px" type="submit" class="btn btn-primary" value="Login">
				</div> <!--end form-group-->
			</form>
			 <div style = "font-size:14px; height:20px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
	</div>	<!--end wrap-->	 
</div>
</body>
</html>