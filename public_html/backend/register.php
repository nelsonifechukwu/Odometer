<?php

require_once('connections/connections.php');
/**

HASH THE PASWORDS
HASH THE PASWORDS
HASH THE PASWORDS
HASH THE PASWORDS
HASH THE PASWORDS
HASH THE PASWORDS

 USERS HAVE A ROLE OF "1", admins have a role of "2"

*/

 if(isset($_POST['register'])){

 	$company_name = strip_tags(mysqli_real_escape_string($con, $_POST['company_name']));
 	$company_email =strip_tags(mysqli_real_escape_string($con, $_POST['company_email']));
 	$password = strip_tags(mysqli_real_escape_string($con, $_POST['password']));
 	$password_confirmation = strip_tags(mysqli_real_escape_string($con, $_POST['password_confirmation']));
 	$company_address = strip_tags(mysqli_real_escape_string($con, $_POST['company_address']));
	$fleet_size = strip_tags(mysqli_real_escape_string($con, $_POST['fleet_size']));
	$fleet_category = strip_tags(mysqli_real_escape_string($con, $_POST['fleet_category']));


 	//check that passwords match
 	if($password != $password_confirmation){

 		echo "<script type='text/javascript'>alert('Your passwords don\'t match')</script>";

 	}else{
 		//check that email is not taken
 		$check_email = $check_user = "SELECT * FROM `users` WHERE `company_email` = '$company_email'";
 		$query_email = mysqli_query($con, $check_email);

 		//if user exists		
 		if(mysqli_num_rows($query_email) >= '1'){

 			echo "<script type='text/javascript'>alert('Email has already been taken!')</script>";

 		}else{

 			$insert_user = "INSERT INTO `users` (`company_name`, `company_email`, `password`, `company_address`, `fleet_size`, `fleet_category`) VALUES ('$company_name', '$company_email', '$password', '$company_address', '$fleet_size', '$fleet_category')";

 			$save_user = mysqli_query($con, $insert_user);

 			if($save_user){

 				echo "<script type='text/javascript'>alert('Registration Successful! Login now!')</script>";
 			}

 		}
 	}

 }

 ?>