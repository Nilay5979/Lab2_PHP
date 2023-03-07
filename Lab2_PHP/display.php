<?php
/*This PHP code checks if the 'name' and 'password' values are set in the 
URL query string using GET method, and if they are, it displays a welcome 
message with the name and password.*/

	if (isset($_GET['name']) && isset($_GET['password'])) {
		$name = $_GET['name'];
		$password = $_GET['password'];
		echo "Welcome, " . $name . "!<br>";
		echo "Your password is: ".$password."<br>";
	}
?>

