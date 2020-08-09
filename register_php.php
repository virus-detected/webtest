<?php
$servername = "localhost";
$username = "root";
$password = "";
$myDB="wt_test_database";

$connect=mysqli_connect($servername,$username,$password,$myDB);
		if(!$connect)
		{
			echo "not connected";
				
		}
				

				
					
						
		if (isset($_POST['submit'])) 
	 
			{	$full_name=$_POST["full_name"];				
				$email= $_POST["email"];
				$password= $_POST["password"];
				
				$sql = "INSERT INTO `register_table`(`full_name`,`email`,`password`) 
					VALUES ('$full_name','$email','$password')";

				$run=mysqli_query($connect,$sql);
				if( $run==true)	
				{
					header("location:login_php.php");
				}
				
	
			}	
		
			
/*
			if(isset($_POST['submit']))
			{
				
				$full_name=$_post["full_name"];
				$email= $_POST["email"];
				
				
				$query_u="select * from register_table where ful_name='$full_name',email='$email'";
				$query_check=mysqli_query($connect,$query_u);
				if(mysqli_num_rows($query_u)>0){
					echo "already taken";
				}
			else
			{
				$sql = "INSERT INTO `register_table`(`full_name`,`email`,`password`) 
					VALUES ('$full_name','$email','$password')";

				$run=mysqli_query($connect,$sql);
				if( $run==true)	
				{
					header("location:login_php.php");
				}
				
			}	
				
				

				
			}
*/

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>register for test</title>
    <link rel="stylesheet" href="register_css.css">
  </head>
  <body>
	<form method="POST" action="">
		<div class="login-box">
			<h1 class="heading">Register for Test</h1>
				<div class="textbox">
					<i class="fas fa-user"></i>
						<input type="text" name="full_name" placeholder="Full name" required>
						 <span class="error"></span>

				</div>
				<div class="textbox">
					<i class="fas fa-lock"></i>
						<input type="email" name="email" placeholder="Email" required>
				</div>

				<div class="textbox">
					<i class="fas fa-lock"></i>
						<input type="password" name="password" placeholder="Password" required>
				</div>

			<input type="submit" name ="submit"class="btn" value="submit"> 
		</div>
	</form>
  </body>
</html>
