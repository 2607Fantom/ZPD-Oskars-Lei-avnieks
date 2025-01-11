<?php
// Email information
$to = "oleisavieks@gmail.com"; // Replace with your email address
$subject = "New Contact Form Submission";

// Get form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Construct email message
$body = "Name: " . $name . "\n" .
        "Email: " . $email . "\n\n" .
        "Message: \n" . $message;

// Email headers
$headers = "From: " . $email . "\r\n" .
           "Reply-To: " . $email . "\r\n" .
           "Content-type: text/plain; charset=utf-8";

// Send the email
if (mail($to, $subject, $body, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Error sending email.";
}
?>