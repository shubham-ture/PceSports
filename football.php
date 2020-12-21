<?php

	include 'db_connect.php';
	include_once 'homepage.php';

	// prepare and bind
	$stmt = $conn->prepare("INSERT INTO sports (name, sport) VALUES (?, ?)");
	$stmt->bind_param("ss", $name, $sport);

	// set parameters and execute
	$name = $_SESSION["name"];
	$sport = 'Football';

	$stmt->execute();
	$message = "Successfully Registered for Football!";
	echo "<script>alert('$message');</script>";

	$stmt->close();
	$conn->close();

?>
