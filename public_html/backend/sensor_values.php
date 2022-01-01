<?php
	require_once('connections/connections.php');

	$records = "SELECT * FROM `distance_conditions`";
	$get_records = mysqli_query($con, $records);

	if($get_records){

		while($param = mysqli_fetch_assoc($get_records)){

		   $sensor_data[] = $param;
		}
	}


	$readings_time = array_column($sensor_data, 'created_at');

// ******* Uncomment to convert readings time array to your timezone ********
/*$i = 0;
foreach ($readings_time as $reading){
    // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
    $readings_time[$i] = date("Y-m-d H:i:s", strtotime("$reading - 1 hours"));
    // Uncomment to set timezone to + 4 hours (you can change 4 to any number)
    //$readings_time[$i] = date("Y-m-d H:i:s", strtotime("$reading + 4 hours"));
    $i += 1;
}*/
$distance_array = array_reverse(array_column($sensor_data, 'distance'));

$distance = json_encode(array_reverse(array_column($sensor_data, 'distance')), JSON_NUMERIC_CHECK);

$reading_time = json_encode(array_reverse($readings_time), JSON_NUMERIC_CHECK);


$distance_array = array_reverse(array_column($sensor_data, 'distance'));

$current_distance = end($distance_array);

//check status of enviromental conditions

$get_distance_conditions = "SELECT * FROM `normal_distance_conditions`";
	$query_get_distance_conditions = mysqli_query($con, $get_distance_conditions);

	if($query_get_distance_conditions){

		while($conditions = mysqli_fetch_assoc($query_get_distance_conditions)){

			//var_dump($conditions);
			$normal_distance_conditions = $conditions;

			//var_dump($normal_distance_conditions);
		}

}


$min_distance = $normal_distance_conditions['min_distance']; 
$max_distance = $normal_distance_conditions['max_distance'];

//check temperature status
if(($current_distance <= $max_distance) && ($current_distance >= $min_distance))
{
	$distance_status = "Good";
	$distance_class = "text-success";

}else if ($current_distance > $max_distance)
{
	$distance_status = "Too high";
	$distance_class = "text-danger";
}else if ($current_distance < $min_distance)
{
	$distance_status = "Too low";
	$distance_class = "text-danger";
}






	?>