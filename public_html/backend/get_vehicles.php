<?php 
require_once('connections/connections.php');

$select_vehicles = "SELECT * FROM `vehicles`";
$query_vehicles = mysqli_query($con, $select_vehicles);


?>