<?php
	
	$server = "localhost";
	$username = "root";
	$password = "";
	$dbname ="web";
	
	$conn = mysqli_connect( $server, $username, $password, $dbname );
	
	if(!$conn){
		die("Connection Error:" . mysqli_connect_error());
		
	}
	
	echo " Data added";
	
?>