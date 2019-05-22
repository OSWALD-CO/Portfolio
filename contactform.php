<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['mail'];
    $message = $_POST['message'];


    $email_from = '_mainaccount@oswaldportfolio.com';

    $email_subject = "New Contact From Portfolio";

    $email_body = "User Name: $name\n".
                    "User Email: $visitor_email\n".
                    "User Message: \n\n$message";


    $to = "clayoswald.co@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .= "Reply To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: index.html");

?>