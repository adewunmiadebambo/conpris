<?php

header("X-XSS-Protection: 0");

$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
$subject = htmlspecialchars($_POST['subject'], ENT_QUOTES, 'UTF-8');
$message = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

$to = 'conprislimited@gmail.com';
$from = "From: noreply@conprislimited";

$content = 'Name: '.$name."\n"
.'Email: '.$email."\n"
.'Subject: '.$subject."\n"
.'Message: '.$message."\n";

mail($to,$subject,$content,$from);


$msg = 'Message sent successfully';
include('contact.php');
exit;


?>