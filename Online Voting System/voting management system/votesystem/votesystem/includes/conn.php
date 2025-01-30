<?php
	$conn = new mysqli('localhost', 'root', 'Mpesa123', 'votesystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>