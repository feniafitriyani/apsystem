<?php
	$conn = new mysqli('localhost', 'root', 'fenfit1995', 'apsystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>