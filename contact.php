<?php
    
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'CV WEB-PAGE CONTACT FORM';
$email_subject = 'NEW MESSAGE FROM CV PAGE CONTACT FORM!'; 

$email_body = 
                "NAME: $name.\n".
                "EMAIL: $email.\n".
                "PHONE: $phone.\n".
                "SUBJECT: $subject.\n".
                "MESSAGE: $message.\n";

$to = "info.sebastianreyes@gmail.com";
$headers = "FROM: $email_from \r\n";
$headers . = "REPLY_TO: $email \r\n";
    
mail($to,$email_subject,$email_body,$headers);

header("location: index.html");

?>
