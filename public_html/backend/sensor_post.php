		<?php

		require_once('connections/connections.php');

		$api_key = "tPmAT5Ab3j7F9";

		if ($_SERVER["REQUEST_METHOD"] == "POST"){

			if(isset($_POST['api_key'])){

				if($api_key == strip_tags(mysqli_real_escape_string($con,$_POST['api_key']))) {

					$distance = strip_tags(mysqli_real_escape_string($con, $_POST['distance']));
				
			
					$created_at = date('Y-m-d H:i:s');

				//	$parameters = "INSERT INTO `distance_conditions` (`distance`, `created_at`) VALUES('$distance',   '$created_at')";
					
				$parameters = "UPDATE distance_conditions SET distance='$distance', created_at='$created_at' WHERE id=13";

					$save_parameters = mysqli_query($con, $parameters);

					if($save_parameters){

						echo "Sensor values have been Updated";

					}else{

						echo mysqli_error($con);
					}		

				}else{

					echo "Wrong API Key sent.";
				}

			}else{
				echo "No API Key seen.";
			}




		}


		?>