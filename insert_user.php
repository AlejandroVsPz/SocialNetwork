<?php 

	if (isset($_POST["submit"])){

		include("includes/connection.php");
		
		$first_name = htmlentities(mysqli_real_escape_string($con,$_POST['first_name']));
		$last_name = htmlentities(mysqli_real_escape_string($con,$_POST['last_name']));
		$pass = htmlentities(mysqli_real_escape_string($con,$_POST['u_pass']));
		$passconfirm = htmlentities(mysqli_real_escape_string($con,$_POST['u_passconfirm']));
		$email = htmlentities(mysqli_real_escape_string($con,$_POST['u_email']));
		$country = htmlentities(mysqli_real_escape_string($con,$_POST['u_country']));
		$gender = htmlentities(mysqli_real_escape_string($con,$_POST['u_gender']));
		$birthday = htmlentities(mysqli_real_escape_string($con,$_POST['u_birthday']));
		
		
		$status = "verified";
		$post = "no";
		$newgid = sprintf('%05d', rand(0,999999));

		$username = strtolower($first_name . "_" . $last_name . "_" . $newgid);
		$check_username_query = "SELECT user_name FROM users WHERE  user_email='$email'";
		$run_username = mysqli_query($con,$check_username_query);

		if (strlen($pass) < 6) {
			echo "<script>alert('Password should be minimum 6 characters!')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
			exit();
		}

		$check_email = "SELECT * FROM users WHERE user_email='$email'";

		$run_email = mysqli_query($con, $check_email);

		$check = mysqli_num_rows($run_email);

		if ($check >= 1) {
			echo "<script>alert('Email alredy exist, Please try using another email')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
			exit();
		}
		if ($pass != $passconfirm) {
			echo "<script>alert('Ups, Password don't match!')</script>";
			echo "<script>window.open('signup.php', '_self')</script>";
			exit();
		}

		$profile_pic = "users/head_blue.png";
		$profile_cover = "cover/cover_picture.png";
		$describe_user = "Hello Khepri!";
		$Relationship = "...";
		$recovery_account = "Iwanttoputadingintheuniverse.";
		$user_reg_date = date("Y-m-d");

		$insert = "INSERT INTO `users` (`f_name`, `l_name`, `user_name`, `describe_user`, `Relationship`, `user_pass`, `user_email`, `user_country`, `user_gender`, `user_birthday`, `user_image`, `user_cover`, `user_reg_date`, `status`, `post`, `recovery_account`) VALUES('$first_name', '$last_name', '$username', '$describe_user', '$Relationship', '$pass', '$email', '$country', '$gender', '$birthday', '$profile_pic', '$profile_cover', '$user_reg_date', '$status', '$post', '$recovery_account')";

		
		/*
		print("$first_name ");
		print("$last_name ");
		print("$username ");
		print("$describe_user ");
		print("$Relationship ");
		print("$pass ");
		print("$email ");
		print("$country ");
		print("$gender ");
		print("$birthday ");
		print("$profile_pic ");
		print("$profile_cover ");
		print("$user_reg_date ");
		print("$status ");
		print("$post ");
		print("$recovery_account ");
		print("$check ");
		*/
		//print("$insert ");
		/*if (mysqli_query($con, $insert)) {
      		echo "New record created successfully";
		} else {
      		echo "Error: " . $insert . "<br>" . mysqli_error($con);
		}
		mysqli_close($con);*/


		if (mysqli_query($con, $insert)) {
			echo "<script>alert('Well done $first_name, you are good to go.')</script>";
			//mysqli_close($con);
			echo "<script>window.open('signin.php', '_self')</script>";
		}else {
			echo "<script>alert('Registration failed, please try again!')</script>";
			echo "Error: " . $insert . "<br>" . mysqli_error($con);
			echo "<script>window.open('signup.php', '_self')</script>";
		}
	}

?>




