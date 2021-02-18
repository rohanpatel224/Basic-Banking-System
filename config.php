<?php

	$servername = "localhost";
	$username = "id16073135_root2";
	$password = "t<G3PkDl]W8hkq_4";
	$dbname = "id16073135_main";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>