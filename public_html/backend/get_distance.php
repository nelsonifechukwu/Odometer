<?php 
require_once('connections/connections.php');

$select_distance = "SELECT * FROM `distance_conditions`";
$query_distance = mysqli_query($con, $select_distance);


?>