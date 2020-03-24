<?php
	$conn =mysqli_connect("localhost", "root", "p@ssw0rd", "Vote");
	mysqli_set_charset($conn, "utf8");

	if (!$conn) {
		die ("Error connecting to database: ".mysqli_connect_error());
	}
	
?>