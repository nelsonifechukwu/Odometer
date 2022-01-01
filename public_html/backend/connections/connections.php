<?php
$servername = "localhost";
$username = "id17217683_transfleet"; 
$password = "Xjok23dl!?IFENEL";
$database = "id17217683_myfleet"; 
// Create connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$con) {

  die("Connection failed: " . mysqli_connect_error());

}

?>