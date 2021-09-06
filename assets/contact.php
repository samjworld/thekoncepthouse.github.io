<?php

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$phone= $_POST['phone'];
$to = "subhrangsupal@gmail.com";
$subject = "Mail From thekoncepthouse";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message. "\r\n Phone =". $phone;
$headers = "From: noreply@thekoncepthouse.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:index.html");
?>
