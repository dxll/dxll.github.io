<?php

# Receive user input
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

# Filter user input
function filter_email_header($form_field) {
return preg_replace('/[\0\n\r\|\!\/\<\>\^\$\%\*\&]+/','',$form_field);
}

$email = filter_email_header($email);

# Send email
$headers = "From: $email\n";
$sent = mail('katherinelindev@gmail.com', 'Message Form Submission', $name, $message, $headers);

?>