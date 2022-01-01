<?php
require_once('connections/connections.php');


if(isset($_POST['create_vehicle'])){

	$vehicle_name = strip_tags(mysqli_real_escape_string($con, $_POST['vehicle_name']));
	$vehicle_model = strip_tags(mysqli_real_escape_string($con, $_POST['vehicle_model']));
	$model_year = strip_tags(mysqli_real_escape_string($con, $_POST['model_year']));
	$license_number = strip_tags(mysqli_real_escape_string($con, $_POST['license_number']));
	$VIN = strip_tags(mysqli_real_escape_string($con, $_POST['VIN']));

	$save_vehicle = "INSERT INTO `vehicles` (`vehicle_name`, `vehicle_model`, `model_year`, `license_number`, `VIN`) VALUES ('$vehicle_name', '$vehicle_model', '$model_year', '$license_number', '$VIN')";

	$query_save = mysqli_query($con, $save_vehicle);

	if($query_save)
	{
		echo "<script type='text/javascript'>alert('You have just added a new vehicle')</script>";
	}
}

if(isset($_POST['reset'])){
    
    	$parameters = "UPDATE distance_conditions SET distance=0, created_at=0 WHERE id=13";

					$save_parameters = mysqli_query($con, $parameters);

					if($save_parameters){

						echo "Sensor values have been Updated";

					}else{

						echo mysqli_error($con);
					}
    
}
?>
