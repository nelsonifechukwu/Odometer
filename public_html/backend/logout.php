<?php
session_start();

  	unset($_SESSION['user_id']);
  	unset($_SESSION['role']);
  	unset($_SESSION['company_name']);
  	if(session_destroy()){
  	header("location: ../index.php");
  	}
 
?>