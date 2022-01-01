<?php
require_once('connections/connections.php');


if(isset($_POST['create_drivers'])){

	$driver_name = strip_tags(mysqli_real_escape_string($con, $_POST['driver_name']));
	$phone_number = strip_tags(mysqli_real_escape_string($con, $_POST['phone_number']));
	$driver_email = strip_tags(mysqli_real_escape_string($con, $_POST['driver_email']));
	$driver_age = strip_tags(mysqli_real_escape_string($con, $_POST['driver_age']));
	$driver_role = strip_tags(mysqli_real_escape_string($con, $_POST['driver_role']));

	$save_driver = "INSERT INTO `driver_details` (`driver_name`, `phone_number`, `driver_email`, `driver_age`, `driver_role`) VALUES ('$driver_name', '$phone_number', '$driver_email', '$driver_age', '$driver_role')";

	$query_save = mysqli_query($con, $save_driver);

	if($query_save)
	{
		echo "<script type='text/javascript'>alert('You have just created a new driver')</script>";
	}
}
?>
