<?php

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "filesadobe325@gmail.com";
$subject= "Support Mail";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@studyhub.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

?>