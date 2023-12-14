<?php
$name=$_POST['name'];
$Visitor-email=$_POST['email'];
$phone-number=$_POST['number'];
$Subject=$_POST['subject'];
$message=$_POST['message'];
$email_from='chanduswebside.com';
$email_subject='New form submission';
$email_body="User Name:$name.\n".
              "User Email:$email.\n".
              "User Number:$number.\n".
              "User Subject :$subject.\n".
              "User Message:$message.\n";
$to='chandrashekarreddy933@gmail.com';
$headers="From:$email_from\r\n";
$headers .="Replay-To:$Visitor_email\r\n";
mail($to,$subject,$email-$email_body,$headers);
header("Location:contact.html");

?>