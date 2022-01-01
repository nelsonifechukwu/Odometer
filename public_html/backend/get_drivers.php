<?php 
require_once('connections/connections.php');

$select_driver = "SELECT * FROM `driver_details`";
$query_users = mysqli_query($con, $select_driver);


?>