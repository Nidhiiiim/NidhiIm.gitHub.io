<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $to = 'nidhimish005@gmail.com'; // Replace with your email address
    $subject = 'Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nDate: $date\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Error sending email.';
    }
}
?>
