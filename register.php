<?php
/* register.php */


header("Content-type: application/json");

/*
NOTE: You should never use `print_r()` in production scripts, or
otherwise output client-submitted data without sanitizing it first.
Failing to sanitize can lead to cross-site scripting vulnerabilities.
*/

if (isset($_POST)){
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB);

	if (!$link) {
	    exit;
	}
	$stmt = $mysqli->prepare("INSERT INTO connection ('name','email','phone','type','contact') VALUES (?,?,?,?,?)");
	$stmt->bind_param("sssii", $_POST['name'], $_POST['email'], $_POST['phone'], $_POST['type'], $_POST['contact']);
	$stmt->execute();
	$stmt->close();

}

