<?php
ob_start();
session_start();
$timezone=date_default_timezone_set("Australia/Sydney");
$conn=mysqli_connect("localhost","root","","social");
if(mysqli_connect_errno()){
	echo "Failed to Connect: ".mysqli_connect_errno();
}
?>