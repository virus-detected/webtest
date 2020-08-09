<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB="wt_test_database";
session_start();
$connect=mysqli_connect($servername,$username,$password,$myDB);
		if(!$connect)
		{
			echo "not connected";
			
		}
		if (isset($_POST['submit'])) 
	 
			{
				$email = $_POST["email"]; 
				$password = $_POST["password"];
				$result = "SELECT * FROM `register_table`WHERE email='".$email."' AND password='".$password."'";
				$check=mysqli_query($connect,$result);
				$data=mysqli_fetch_array($check);
			
             if ($check->num_rows > 0)
			
				{ 
				$_SESSION['sid']=$data['id'];
				echo "yes";	
				header("Refresh:0; url=instruction_php.php");
				}
				else{
					echo"no";
				}
		   }	


?>	


<!doctype html>
<html>
	<head>
		<title>log in </title>
		<link rel="stylesheet" type="text/css" href="login_css.css">
	</head>
<body>
	<form action="" method="POST">
			<div class="login-box">
				<h1 class="heading">Login for Test</h1>	
			<div class="textbox">
					<i class="fas fa-user"></i>
				<input type="text" name="email" placeholder="Email" ><br><br>
			</div>
			<div class="textbox">
			<i class="fas fa-lock"></i>
				<input type="password" name="password" placeholder="Password"><br><br>
			</div>
				<input type="submit" name ="submit" class="btn" value="submit">	
			</div>		
	</form>
</body>
</html>