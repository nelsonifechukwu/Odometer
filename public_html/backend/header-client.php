<?php
session_start();
if(!$_SESSION){
  echo "<script type='text/javascript'>alert('You are not logged in')</script>";
  header('location: ../index.php');
}else{
	
  if($_SESSION['role'] != 1){
  echo "<script type='text/javascript'>alert('You don\'t have permission to view this page')</script>";
  exit();
  
  }

}
?>