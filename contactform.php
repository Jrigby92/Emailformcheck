<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from='info@josephrigby.com';

$email_subject = "New Form Submission";

$email_body = "Username: $name.\n".
             "User Email: $visitor_email.\n". 
             "User Message: $message.\n";

             $to= "info@josephrigby.com";
             $headers = "From: $email_from \r\n";
             $headers = "Reply-To:$visitor_email \r\n";
             mail($to,$email_subject,$email_body,$headers);
             header("location: index.html");

 ?>            
