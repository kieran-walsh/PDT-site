<?php
    //The info from the form
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $type = $_POST['who-type'];
    $message = $_POST['message'];

    //The email that's being used to send the form info
    $email_from = 'phidtmqu@server113.web-hosting.com';
    $email_subject = 'New Contact Form Submission';
    $email_body = "New Contact Form Submission \n ----- \n Name: $name \n Email: $visitor_email \n Type of visitor: $type \n Message: $message \n ----- \n Done.";

    //The process of actually sending the message
    $to = 'phideltparho@gmail.com';
    $headers = "From: $email_from \r\n"."Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("Location: ../contact.html");
?>