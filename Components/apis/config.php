<?php
	$conn =mysqli_connect("localhost", "root", "", "vote");
	mysqli_set_charset($conn, "utf8");

	if (!$conn) {
		die ("Error connecting to database: ".mysqli_connect_error());
	}
	
?>