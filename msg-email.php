<?php

if (isset($_POST['submit'])){
	# Receive user input
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "katherinelindev@gmail.com";
	$heaers = "From: ".$email;
	$txt = "You have received an email from ".$name.".\n\n".$message;

	mail($mailTo, $txt, $headers);
	header("Location: index.html?mailsend");
}

?>