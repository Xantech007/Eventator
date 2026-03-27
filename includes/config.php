<?php
ob_start();
session_start();

$conn = new mysqli('sql106.infinityfree.com', 'if0_41489345_event' , '1V1DyYiXWU4yVzp' , 'if0_41489345');
if($conn->connect_error){
	die("connection failed :" .$conn->connect_error);
}



?>
