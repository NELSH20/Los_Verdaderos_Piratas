<?php
$name = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "nelsonsubervi75@gmail.com";
$subject ="Contact Form";
$mailheader= "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader)  or die("Error!");
echo "Thank You!";
?>