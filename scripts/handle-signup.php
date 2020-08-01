<?php
    //The info from the form
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $phone = $_POST['phone'];
    $year = $_POST['year'];

    //Checkbox set 1
    $rec_info = $_POST['rec-info'];
    $newsletter = $_POST['newsletter'];
    $reminders = $_POST['reminders'];

    //Checkbox set 2
    $by_email = $_POST['by-email'];
    $by_text = $_POST['by-text'];
    $by_fb = $_POST['by-fb'];

    //The email that's being used to send the form info
    $email_from = 'phidtmqu@server113.web-hosting.com';
    $email_subject = 'New Signup Form Submission';
    $email_body = "New Signup Form submission \n -----
Name: $name \n Email: $visitor_email \n Phone number: $phone \n Year: $year \n 
Would like to receive: \n Recruitment info: $rec_info \n Newsletters: $newsletter \n Reminders: $reminders \n
Would like to be contacted: \n By email: $by_email \n By text: $by_text \n By Facebook: $by_facebook \n -----
Done.";

    //The process of actually sending the message
    $to = 'phideltparho@gmail.com';
    $headers = "From: $email_from \r\n"."Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("Location: ../signup.html");
?>