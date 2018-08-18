<?php
/* register.php */


header("Content-type: application/json");

/*
NOTE: You should never use `print_r()` in production scripts, or
otherwise output client-submitted data without sanitizing it first.
Failing to sanitize can lead to cross-site scripting vulnerabilities.
*/

if (isset($_POST)){
	$mysqli = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB);

	if (!$mysqli) {
	    exit;
	}
	$name = $mysqli->real_escape_string($_POST['name']);
	$email = $mysqli->real_escape_string($_POST['email']);
	$phone = $mysqli->real_escape_string($_POST['phone']);
	$type = $mysqli->real_escape_string($_POST['type']);
	$contact = $mysqli->real_escape_string($_POST['contact']);
	$city = $mysqli->real_escape_string($_POST['city']);
	$country = $mysqli->real_escape_string($_POST['country']);


	if($mysqli->query("INSERT INTO connection ('name', 'email', 'phone', 'type', 'contact', 'city', 'country') VALUES ('$name','$email','$phone','$type','$contact','$city','$country')")){

	}

	$stmt->close();

}

