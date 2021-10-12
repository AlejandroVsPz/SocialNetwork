<!DOCTYPE html>
<html>
<head>
	<title>Login and Sing Up</title>
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
	#centered1{
		position: absolute;
		font-size: 10vw;
		top: 44%;
		left: 20%;
		transform: translate(-50%, -50%);
		background: -webkit-linear-gradient(#3498DB, #00D5F3);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;*/
	}
	#centered2{
		position: absolute;
		font-size: 10vw;
		top: 54%;
		left: 30%;
		transform: translate(-50%, -50%);
		background: -webkit-linear-gradient(#3498DB, #00D5F3);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;*/
	}
	#centered3{
		position: absolute;
		font-size: 10vw;
		top: 63%;
		left: 20%;
		transform: translate(-50%, -50%);
		background: -webkit-linear-gradient(#3498DB, #00D5F3);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;*/
	}
	#signup{
		width: 60%;
		border-radius: 30px;
		background: linear-gradient( to bottom, #3498DB, #00D5F3);
		border: 1px solid #3498DB;
		color: white;

	}
	#login{
		width: 60%;
		background-color: #FDFEFE ;
		border: 1px solid #3498DB ;
		color: #00D5F3;
		border-radius: 30px;
	}
	#login:hover{
		width: 60%;
		background-color: #FDFEFE ;
		border: 1px solid #3498DB ;
		color: #00D5F3;
		border-radius: 30px;

	}
	.well{
		background: linear-gradient( to bottom, #8E44AD, #00D5F3); 
	}
	#h2{
		background: -webkit-linear-gradient(#3498DB, #00D5F3);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;
	}
	#h4{
		background: -webkit-linear-gradient(#D502E6, #8E44AD);
		-webkit-background-clip: text;
		-webkit-text-fill-color: transparent;

	}


</style>
<body>
	<div class="row">
		<div class="col-sm-12">
			<div class="well">
				<center><h1 style="color: #FBFCFC ; font-family: 'Arial'; letter-spacing: 2pt;">Khepri</h1></center>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6" style="left: 0.5%">
			<img src="images/background6.jpg" class="img-rounded" title="Khepri" width="100%" height="565px">
		</div>
		<div class="centered" id="centered1">
			<h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Follow your friends</strong></h3>
		</div>
		<div class="centered" id="centered2">
			<h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Work Together</strong></h3>
		</div>
		<div class="centered" id="centered3">
			<h3 style="color: white;"><span class="glyphicon glyphicon-search"></span>&nbsp&nbsp<strong>Join the Community</strong></h3>
		</div>
		<div class="col-sm-6" style="left: 8%;">
			<img src="images/k.png" style="margin-left: 22%;" class="img-rounded" title="Khepri" width="80px" height="80px">
			<h2 id="h2"><strong>See waht's happening in <br> the world right now</strong></h2><br><br>
			<h4 id="h4"><strong>Join Khepri today</strong></h4>
			<form method="post" action="">
				<button id="signup" class="btn btn-info btn-lg" name="signup">Sign up</button><br><br>
				<?php 
				if (isset($_POST['signup'])) {
					echo "<script>window.open('signup.php','_self')</script>";
				}

				 ?>
				<button id="login" class="btn btn-info btn-lg" name="login">Log in</button><br><br>
				<?php 
				if (isset($_POST['login'])) {
					echo "<script>window.open('signin.php','_self')</script>";
				}

				 ?>
			</form>
		</div>
	</div>
</body>
</html>














