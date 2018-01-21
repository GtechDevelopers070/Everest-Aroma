<?php

	$servername = "localhost";

	$username = "root";

	$password = "Sagarmatha0";



	// Create connection

	$db = mysqli_connect($servername, $username, $password);

	// $db=mysqli_connect("localhost", "root","");

	 mysqli_select_db($db,"registration");

	// mysqli_select_db($db,"everestaromacms");

?>