<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
	body{
		overflow-x: hidden;
	}
	.main-content{
		width: 50%;
		height: 40%;
		margin: 10px auto;
		background-color: #fff;
		border: 2px solid #8E44AD;
		padding: 40px 50px;
	}
	.header{
		border: 0px solid #000;
	}
	.well{
		background: linear-gradient( to bottom, #8E44AD, #00D5F3); 
	}
	#signin{
		width: 60%;
		border-radius: 30px;
		background: linear-gradient( to bottom, #3498DB, #00D5F3);
		border: 1px solid #3498DB;
	}
	#h3{
		background: -webkit-linear-gradient(#D502E6, #8E44AD);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
	.overlap-text{
		position: relative;
	}

	.overlap-text a{
		position: absolute;
		top: 8px;
		right: 10px;
		font-size: 14px;
		text-decoration: none;
		font-family: 'Overpass Mono', monospace;
		letter-spacing: -1px;
	}




</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><a style="text-decoration: none;" href="main.php"><h1 style="color: #FBFCFC ; font-family: 'Arial'; letter-spacing: 2pt;">Khepri</h1></a></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="main-content">
				<div class="header">
					<h3 style="text-align: center; font-family: 'Arial'; letter-spacing: 1pt;" id="h3"><strong>Login to Khepri</strong></h3>
				</div>
				<div class="l-part">
					<form action="" method="post">
						<input type="email" name="email" placeholder="Email" required="required" class="form-control imput-md"><br>
						<div class="overlap-text">
							<input type="password" name="pass" placeholder="Password" required="required" class="form-control input-md"><br>
							<a style="text-decoration: none; float: right; color: #187FAB;" data-toggle="tooltip" title="Reset Password" href="forgot_password.php">Forgot Password</a>
						</div>
						<a href="signup.php" style="text-decoration: none; float: right; color: #8E44AD;" data-toggle="tooltip" title="Create Account">Don't have an account?</a><br><br>
						<center><input type = "submit" value ="Log in" name = "login" class="btn btn-info btn-lg" id="signin"/></center>
						<?php 

							include("login.php");

						 ?>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>






















