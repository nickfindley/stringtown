<?php
// Get values from form
$name       = $_POST['name'];
$email      = $_POST['email'];
$telephone  = $_POST['telephone'];
$message    = $_POST['message'];

$to = "nick@nickfindley.com";
$subject = "Future Tutorials Contact Form Test";
$message = " Name: " . $name . "\r\n Email: " . $email . "\r\n Telephone: " . $telephone . "\r\n Message: " . $message;


$headers = "From:" . $email . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

if ( mail( $to, $subject, $message, $headers) )
{
    header('Location: /contact/?send=true');
}
else
{
  header('Location: /contact/?send=false');
}
?>