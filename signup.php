<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
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
	#signup{
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
					<h3 style="text-align: center; font-family: 'Arial'; letter-spacing: 1pt;" id="h3"><strong>Join Khepri</strong></h3>
				</div>
				<div class="l-part">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" name="first_name" class="form-control" placeholder="First Name" required="required">
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
							<input type="text" name="last_name" class="form-control" placeholder="Last Name" required="required">
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" id="password" name="u_pass" class="form-control" placeholder="Password" required="required">
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input type="password" id="password" name="u_passconfirm" class="form-control" placeholder="Confirm Password" required="required">
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input type="email" id="email" name="u_email" class="form-control" placeholder="Email" required="required">
						</div><br>

						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-chevron-down"></i></span>
							<select class="form-control" name="u_country" required="required">
							<option disabled="">Select your Country</option>
							<option>United States of America</option>
							<option>Canada</option>
							<option>México</option>
						    </select>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon input-md"><i class="glyphicon glyphicon-chevron-down"></i></span>
							<select class="form-control" name="u_gender" required="required">
							<option disabled="">Select your Gender</option>
							<option>Male</option>
							<option>Female</option>
							<option>Others</option>
						    </select>
						</div><br>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
							<input type="date" name="u_birthday" class="form-control input-md" placeholder="birthday" required="required">
						</div><br>
						<a href="signin.php" style="text-decoration: none; float: right; color: #8E44AD;" data-toggle="tooltip" title="Sign in">Alredy have an account?</a><br><br>
						<center><input type = "submit" value ="Sign in" name = "submit" class="btn btn-info btn-lg" id="signup"/></center>
						<!--<center><button class="btn btn-info btn-lg" id="signup" name="sign_up">Sign Up</button></center>-->
						<?php 
						include("insert_user.php")

						 ?>
						<center><small id="emailHelp" class="form-text text-muted" style="text-align: center;">We'll never share your information with anyone else.</small></center>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
</html>













