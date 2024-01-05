<?php

	$db_host = "localhost";
	$db_user = "root";
	$db_password = "root";
	$db_port = "";		
	$db_name = "pawi";
	
	$con = mysqli_connect($db_host,$db_user,$db_password);
	mysqli_select_db($con, $db_name);

?>