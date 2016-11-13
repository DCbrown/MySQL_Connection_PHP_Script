<?php

$connection = mysqli_connect('hostname', 'username', 'password', 'connectionScript');

	if (!$connection) {
		die("Database connection failed");
	}
?>	