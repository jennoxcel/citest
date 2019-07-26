<?php

// $servername = "p:localhost";
// $username = "root";
// $password = "";

// // Create connection
// $conn = new mysqli($servername, $username, $password);

// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// echo "Connected successfully <br />";
// echo "Sleeping <br />";
// $conn->query("SELECT SLEEP(15);");
// // sleep(10);
// echo "Done";


   for($i = 0; $i < 10000; $i++){
		$servername = "p:localhost";
		$username = "root";
		$password = "";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		} 
		$conn->query("SELECT 1");
   }