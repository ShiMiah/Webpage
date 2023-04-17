<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@baanaani.fi';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                  "User Subject: $subject.\n".
                     "User Message: $subject.\n";

$to = 'admin@baanaani.fi';

$headers = "From: $email_from \r\n";

$headers .= "Reply_to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>