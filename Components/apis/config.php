<?php
	$conn =mysqli_connect("host", "user", "password", "database");
	mysqli_set_charset($conn, "utf8");

	if (!$conn) {
		die ("Error connecting to database: ".mysqli_connect_error());
	}
	
?>