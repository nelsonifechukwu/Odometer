<?php
session_start();
/*
CREATE SESSIONS AFTER LOGIN
CREATE SESSIONS AFTER LOGIN
CREATE SESSIONS AFTER LOGIN
CREATE SESSIONS AFTER LOGIN
CREATE SESSIONS AFTER LOGIN

*/

	if(isset($_POST['login'])){

		$company_email = strip_tags(mysqli_real_escape_string($con, $_POST['company_email']));
		$password = strip_tags(mysqli_real_escape_string($con, $_POST['company_password']));

		$check_user = "SELECT * FROM `users` WHERE `company_email` = '$company_email' AND `password` = '$password'";
		$query_user = mysqli_query($con, $check_user);

		$is_user = mysqli_num_rows($query_user);

		if(mysqli_num_rows($query_user) >= '1'){//if user exists

			while($user = mysqli_fetch_assoc($query_user)){

			if($user['role'] == '1'){

				header('location: examples/dashboard.php');
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['role'] = $user['role'];
				$_SESSION['company_name'] = $user['company_name'];

			}else {

				//redirect admin to dashboard
				//echo "<script type='text/javascript'>alert('You are an admin')</script>";
				header('location: examples/clients.php');
				$_SESSION['user_id'] = $user['id'];
				$_SESSION['role'] = $user['role'];
				$_SESSION['company_name'] = $user['company_name'];
			}
		}

		}else{

			echo "<script type='text/javascript'>alert('Incorrect username or password')</script>";
		}



	}

?>