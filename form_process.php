<?php 
if(isset($_POST["submit"])){

	$minimum = 5;
	$maximum = 10;
	$username = $_POST["username"];
	$password = $_POST["password"];
	$name = ["Robi", "Peggy", "Martinus", "Patatap"];

	if(strlen($username) < $minimum) {
		echo 'Username has to be longer than 5';
	}

	if(strlen($username) > $maximum) {
		echo 'Username has to be shorter than 10';
	}

	if(!in_array($username, $name)) {
		echo "Sorry you are not allowed";
	} else {
		echo "Welcome";
	}

}
?>